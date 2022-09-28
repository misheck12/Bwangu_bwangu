<?php

namespace Modules\Cargo\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use App\Order;
use Modules\Cargo\Entities\BusinessSetting;
use App\Seller;
use Session;
use App\CustomerPackage;
use App\SellerPackage;
use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Core\SandboxEnvironment;
use PayPalCheckoutSdk\Core\ProductionEnvironment;
use PayPalCheckoutSdk\Orders\OrdersCreateRequest;
use PayPalCheckoutSdk\Orders\OrdersCaptureRequest;
use Srmklive\PayPal\Services\PayPal;
use Modules\Currency\Entities\Currency;

class PaypalController
{

    public function getCheckout($shipment)
    {        
        $paymentSettings = resolve(\Modules\Payments\Entities\PaymentSetting::class)->toArray();
        $paypal_payment = json_decode($paymentSettings['paypal_payment'], true);

        $PAYPAL_SANDBOX_CLIENT_ID     = $paypal_payment['PAYPAL_SANDBOX_CLIENT_ID'] ?? '';
        $PAYPAL_SANDBOX_CLIENT_SECRET = $paypal_payment['PAYPAL_SANDBOX_CLIENT_SECRET'] ?? '';
        $PAYPAL_LIVE_CLIENT_ID        = $paypal_payment['PAYPAL_LIVE_CLIENT_ID'] ?? '';
        $PAYPAL_LIVE_CLIENT_SECRET    = $paypal_payment['PAYPAL_LIVE_CLIENT_SECRET'] ?? '';
        $PAYPAL_MODE                  = $paypal_payment['PAYPAL_MODE'] == 1 ? 'sandbox' : 'live';

        config(['paypal.mode' => $PAYPAL_MODE]);
        config(['paypal.sandbox.client_id' => $PAYPAL_SANDBOX_CLIENT_ID]);
        config(['paypal.sandbox.client_secret' => $PAYPAL_SANDBOX_CLIENT_SECRET]);
        config(['paypal.live.client_id' => $PAYPAL_LIVE_CLIENT_ID]);
        config(['paypal.live.client_secret' => $PAYPAL_LIVE_CLIENT_SECRET]);
        config(['paypal.currency' => Currency::findOrFail(get_setting('system_default_currency'))->code ?? 'USD' ]);

        $provider = \PayPal::setProvider();
        $provider->setApiCredentials(config('paypal'));

        $token = $provider->getAccessToken();
        $provider->setAccessToken($token);

        $price = $shipment->tax + $shipment->shipping_cost + $shipment->insurance;
        $order = $provider->createOrder([
            "intent" => "CAPTURE",
            "puschase_nuits" => [
                [
                    "reference_id" => $shipment->id,
                    "amount" => [
                        "value" => number_format($price, 2, '.', ''),
                        "currency_code" => Currency::findOrFail(get_setting('system_default_currency'))->code ?? 'USD'
                    ]
                ]
            ]
        ]);
        dd($order);

        try {
            // Call API with your client and get a response for your call
            $response = $client->execute($request);
            // dd($shipment->payment_integration_id);
            // exit;
            $shipment->payment_integration_id = $response->result->id;
            $shipment->save();
            // If call returns body in response, you can get the deserialized version from the result attribute of the response
            return Redirect::to($response->result->links[1]->href);
        }catch (HttpException $ex) {

        }
    }

    public function create(Request $request)
    {
        $data = json_decode($request->getContent(), true);
        $paymentSettings = resolve(\Modules\Payments\Entities\PaymentSetting::class)->toArray();
        $paypal_payment = json_decode($paymentSettings['paypal_payment'], true);

        $PAYPAL_SANDBOX_CLIENT_ID     = $paypal_payment['PAYPAL_SANDBOX_CLIENT_ID'] ?? '';
        $PAYPAL_SANDBOX_CLIENT_SECRET = $paypal_payment['PAYPAL_SANDBOX_CLIENT_SECRET'] ?? '';
        $PAYPAL_LIVE_CLIENT_ID        = $paypal_payment['PAYPAL_LIVE_CLIENT_ID'] ?? '';
        $PAYPAL_LIVE_CLIENT_SECRET    = $paypal_payment['PAYPAL_LIVE_CLIENT_SECRET'] ?? '';
        $PAYPAL_MODE                  = $paypal_payment['PAYPAL_MODE'] == 1 ? 'sandbox' : 'live';

        $provider = \PayPal::setProvider();
        $provider->setApiCredentials([
            'mode'    => $PAYPAL_MODE, // Can only be 'sandbox' Or 'live'. If empty or invalid, 'live' will be used.
            'sandbox' => [
                'client_id'         => $PAYPAL_SANDBOX_CLIENT_ID,
                'client_secret'     => $PAYPAL_SANDBOX_CLIENT_SECRET,
                'app_id'            => 'APP-80W284485P519543T',
            ],
            'live' => [
                'client_id'         => $PAYPAL_LIVE_CLIENT_ID,
                'client_secret'     => $PAYPAL_LIVE_CLIENT_SECRET,
                'app_id'            => env('PAYPAL_LIVE_APP_ID', ''),
            ],
        
            'payment_action' => env('PAYPAL_PAYMENT_ACTION', 'Sale'), // Can only be 'Sale', 'Authorization' or 'Order'
            'currency'       => Modules\Currency\Entities\Currency::findOrFail(get_setting('system_default_currency'))->code ?? 'USD',
            'notify_url'     => env('PAYPAL_NOTIFY_URL', ''), // Change this accordingly for your application.
            'locale'         => env('PAYPAL_LOCALE', 'en_US'), // force gateway language  i.e. it_IT, es_ES, en_US ... (for express checkout only)
            'validate_ssl'   => env('PAYPAL_VALIDATE_SSL', true), // Validate SSL when creating api client.
        ]);

        $token = $provider->getAccessToken();
        $provider->setAccessToken($token);

        $price = $data['value'];

        $order = $provider->createOrder([
            "intent" => "CAPTURE",
            "puschase_nuits" => [
                [
                    "reference_id" => $data['id'],
                    "amount" => [
                        "value" => number_format($price, 2, '.', ''),
                        "currency_code" => Modules\Currency\Entities\Currency::findOrFail(get_setting('system_default_currency'))->code ?? 'USD'
                    ]
                ]
            ]
        ]);
    }


    public function getCancel(Request $request)
    {
        // Curse and humiliate the user for cancelling this most sacred payment (yours)
        // $request->session()->forget('order_id');
        // $request->session()->forget('payment_data');
        flash('Payment cancelled')->success();
    	return redirect()->route('home');
    }

    public function getDone(Request $request)
    {
        // Creating an environment
        $paymentSettings = resolve(\Modules\Payments\Entities\PaymentSetting::class)->toArray();
        $paypal_payment = json_decode($paymentSettings['paypal_payment'], true);

        $clientId = $paypal_payment['PAYPAL_CLIENT_ID'];
        $clientSecret = $paypal_payment['PAYPAL_CLIENT_SECRET'];

        if ($paypal_payment['paypal_sandbox'] == 1) {
            $environment = new SandboxEnvironment($clientId, $clientSecret);
        }
        else {
            $environment = new ProductionEnvironment($clientId, $clientSecret);
        }
        $client = new PayPalHttpClient($environment);

        // $response->result->id gives the orderId of the order created above
        $ordersCaptureRequest = new OrdersCaptureRequest($request->token);
        $ordersCaptureRequest->prefer('return=representation');
        try {
            // Call API with your client and get a response for your call
            $response = $client->execute($ordersCaptureRequest);

            // If call returns body in response, you can get the deserialized version from the result attribute of the response
            // if($request->session()->has('payment_type')){
                // if($request->session()->get('payment_type') == 'cart_payment'){
                    $checkoutController = new CheckoutController;
                    return $checkoutController->checkout_done($request->token, json_encode($response));
            //     }
            //     elseif ($request->session()->get('payment_type') == 'wallet_payment') {
            //         $walletController = new WalletController;
            //         return $walletController->wallet_payment_done($request->session()->get('payment_data'), json_encode($response));
            //     }
            //     elseif ($request->session()->get('payment_type') == 'customer_package_payment') {$customer_package_controller = new CustomerPackageController;
            //         return $customer_package_controller->purchase_payment_done($request->session()->get('payment_data'), json_encode($response));
            //     }
            //     elseif ($request->session()->get('payment_type') == 'seller_package_payment') {$seller_package_controller = new SellerPackageController;
            //         return $seller_package_controller->purchase_payment_done($request->session()->get('payment_data'), json_encode($response));
            //     }
            // }
        }catch (HttpException $ex) {

        }
    }
}
