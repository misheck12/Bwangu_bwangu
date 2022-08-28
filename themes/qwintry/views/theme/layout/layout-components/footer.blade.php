@php

$footer_setting = theme_setting('footer.footer');
if (!$footer_setting) {
    $footer_setting = [];
}

$hasImage = isset($model) && $model->image;
$getImage = $hasImage ? $model->imageUrl : '';
$getMobileImage = $hasImage ? $model->imageUrl : '';

$textColor = array_key_exists('text_color', $footer_setting) && $footer_setting['text_color'] ? "color: {$footer_setting['text_color']} !important;" : '';

@endphp
@if (array_key_exists('display_footer', $footer_setting) && $footer_setting['display_footer'])

    <footer id="main-footer"
        style="{{ (array_key_exists('footer_bg', $footer_setting) && $footer_setting['footer_bg']? "background: {$footer_setting['footer_bg']} !important;": 'background: #111026;') .(array_key_exists('footer_text_color', $footer_setting) && $footer_setting['footer_text_color']? "color: {$footer_setting['footer_text_color']} !important;": 'color: #FFF;') }}">

        <div class="container">
            <div class="row footer-cols">
                @if (array_key_exists('display_widgets', $footer_setting) && array_key_exists('widgets_count', $footer_setting) && $footer_setting['display_widgets'])

                    @php
                        $col_width = 'col-lg-12';
                        if ($footer_setting['widgets_count'] > 3) {
                            $col_width = 'col-lg-3';
                        } elseif ($footer_setting['widgets_count'] > 2) {
                            $col_width = 'col-lg-4';
                        } elseif ($footer_setting['widgets_count'] > 1) {
                            $col_width = 'col-lg-6';
                        }
                    @endphp
                    <div class="{{ $col_width }} col-md-6">
                        {!! get_sidebar('footer_sidebar_1') !!}
                    </div>
                    @if ($footer_setting['widgets_count'] > 1)
                        <div class="{{ $col_width }} col-md-6">
                            {!! get_sidebar('footer_sidebar_2') !!}
                        </div>
                    @endif
                    @if ($footer_setting['widgets_count'] > 2)
                        <div class="{{ $col_width }} col-md-6">
                            {!! get_sidebar('footer_sidebar_3') !!}
                        </div>
                    @endif
                    @if ($footer_setting['widgets_count'] > 3)
                        <div class="{{ $col_width }} col-md-6">
                            {!! get_sidebar('footer_sidebar_4') !!}
                        </div>
                    @endif
                @endif
            </div>

            <div class="footer-bottom d-flex">

                <!-- social media -->


                <div class="container text-center">
                    <ul class="footer-links list-unstyled d-flex flex-wrap">
                        @if ($footer_setting['about_us_Url'][$footer_setting['about_us_Url']['type']])
                            <li> <a href="{{ $footer_setting['about_us_Url'][$footer_setting['about_us_Url']['type']] }}"
                                    style=" color: {{ $footer_setting['footer_text_color'] }}"
                                    class="link">@lang('theme_qwintry::view.about_us')</a> </li>
                        @endif
                        @if ($footer_setting['privacy_policy_Url'][$footer_setting['privacy_policy_Url']['type']])
                            <li> <a href="{{ $footer_setting['privacy_policy_Url'][$footer_setting['privacy_policy_Url']['type']] }}"
                                    style=" color: {{ $footer_setting['footer_text_color'] }}"
                                    class="link">@lang('theme_qwintry::view.privacy_policy')</a> </li>
                        @endif
                        @if ($footer_setting['terms_conditions_Url'][$footer_setting['terms_conditions_Url']['type']])
                            <li> <a href="{{ $footer_setting['terms_conditions_Url'][$footer_setting['terms_conditions_Url']['type']] }}"
                                    style=" color: {{ $footer_setting['footer_text_color'] }}"
                                    class="link">@lang('theme_qwintry::view.terms_conditions')</a> </li>
                        @endif
                        @if ($footer_setting['refunds_Url'][$footer_setting['refunds_Url']['type']])
                            <li> <a href="{{ $footer_setting['refunds_Url'][$footer_setting['refunds_Url']['type']] }}"
                                    style=" color: {{ $footer_setting['footer_text_color'] }}"
                                    class="link">@lang('theme_qwintry::view.refunds')</a> </li>
                        @endif
                        @if ($footer_setting['api_Url'][$footer_setting['api_Url']['type']])
                            <li> <a href="{{ $footer_setting['api_Url'][$footer_setting['api_Url']['type']] }}"
                                    style=" color: {{ $footer_setting['footer_text_color'] }}"
                                    class="link">@lang('theme_qwintry::view.api')</a> </li>
                        @endif
                        @if ($footer_setting['reviews_Url'][$footer_setting['reviews_Url']['type']])
                            <li> <a href="{{ $footer_setting['reviews_Url'][$footer_setting['reviews_Url']['type']] }}"
                                    style=" color: {{ $footer_setting['footer_text_color'] }}"
                                    class="link">@lang('theme_qwintry::view.reviews')</a> </li>
                        @endif
                        @if ($footer_setting['track_package_Url'][$footer_setting['track_package_Url']['type']])
                            <li> <a href="{{ $footer_setting['track_package_Url'][$footer_setting['track_package_Url']['type']] }}"
                                    style=" color: {{ $footer_setting['footer_text_color'] }}"
                                    class="link">@lang('theme_qwintry::view.track_package')</a> </li>
                        @endif
                        @if ($footer_setting['faq_Url'][$footer_setting['faq_Url']['type']])
                            <li> <a href="{{ $footer_setting['faq_Url'][$footer_setting['faq_Url']['type']] }}"
                                    style=" color: {{ $footer_setting['footer_text_color'] }}"
                                    class="link">@lang('theme_qwintry::view.faq')</a> </li>
                        @endif
                        @if ($footer_setting['contact_us_Url'][$footer_setting['contact_us_Url']['type']])
                            <li> <a href="{{ $footer_setting['contact_us_Url'][$footer_setting['contact_us_Url']['type']] }}"
                                    style=" color: {{ $footer_setting['footer_text_color'] }}"
                                    class="link"> @lang('theme_qwintry::view.contact_us')</a> </li>
                        @endif
                        <br>
                        <li class="social">
                            @if ($footer_setting['instagram_url'][$footer_setting['instagram_url']['type']])
                                <a href="{{ $footer_setting['instagram_url'][$footer_setting['instagram_url']['type']] }}"
                                    style=" color: {{ $footer_setting['footer_text_color'] }}"
                                    class="link"> <i class=" mr-3 fa-lg fa-brands fa-instagram"></i> </a>
                            @endif
                            @if ($footer_setting['facebook_url'][$footer_setting['facebook_url']['type']])
                                <a href="{{ $footer_setting['facebook_url'][$footer_setting['facebook_url']['type']] }}"
                                    style=" color: {{ $footer_setting['footer_text_color'] }}"
                                    class="link"> <i class=" mr-3 fa-lg fa-brands fa-facebook-f"></i> </a>
                            @endif
                            @if ($footer_setting['youtube_url'][$footer_setting['youtube_url']['type']])
                                <a href="{{ $footer_setting['youtube_url'][$footer_setting['youtube_url']['type']] }}"
                                    style=" color: {{ $footer_setting['footer_text_color'] }}"
                                    class="link"> <i class=" mr-3 fa-lg fa-brands fa-youtube"></i> </a>
                            @endif
                            @if ($footer_setting['linkedin_url'][$footer_setting['linkedin_url']['type']])
                                <a href="{{ $footer_setting['linkedin_url'][$footer_setting['linkedin_url']['type']] }}"
                                    style=" color: {{ $footer_setting['footer_text_color'] }}"
                                    class="link"> <i class=" mr-3 fa-lg fa-brands fa-linkedin-in"></i> </a>
                            @endif
                        </li>
                    </ul>

                    <div class="footer-logo">
                        <a href="/" class="link d-block">
                            <img style=" max-width: 300px;  max-height: 56px;"
                                src="{{ theme_setting_image('homepage.footer.section_banner') != ''? theme_setting_image('homepage.footer.section_banner'): get_general_setting('website_logo', asset('themes/qwintry/assets/images/logo.svg')) }}"
                                alt="logo" />
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </footer>
@endif
