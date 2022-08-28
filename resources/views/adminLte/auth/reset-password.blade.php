<x-auth-layout>

    <x-slot name="pageTitle">Reset password</x-slot>

    <!--begin::Reset Password Form-->
    <form method="POST" action="{{ route('password.update') }}" class="form w-100" novalidate="novalidate" id="kt_new_password_form">
    @csrf

    <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->token }}">

        <!--begin::Heading-->
        <div class="text-center mb-10">
            <!--begin::Title-->
            <h1 class="text-dark mb-3">
                {{ __('Update Your Password') }}
            </h1>
            <!--end::Title-->

            <!--begin::Link-->
            <div class="text-gray-400 fw-bold fs-4">
                {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
            </div>
            <!--end::Link-->
        </div>
        <!--begin::Heading-->

        @error('token')
            <div class="mb-10 bg-light-info p-8 rounded">
                <div class="text-danger"> {{ $message }} </div>
            </div>
        @enderror

        <!--begin::Input group-->
        <div class="fv-row mb-10">
            <label class="form-label fw-bolder text-gray-900 fs-6">{{ __('Email') }}</label>
            <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" autocomplete="off" value="{{ old('email', $request->email) }}" required/>
            @error('email') 
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <!--end::Input group-->

        <!--begin::Input group-->
        <div class="mb-7 fv-row" data-kt-password-meter="true">
            <!--begin::Wrapper-->
            <div class="mb-1">
                <!--begin::Label-->
                <label class="form-label fw-bolder text-dark fs-6">
                    {{ __('Password') }}
                </label>
                <!--end::Label-->

                <!--begin::Input wrapper-->
                <div class="position-relative mb-2">
                    <input class="form-control form-control-lg" type="password" name="password" autocomplete="new-password"/>
                    <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                        <i class="bi bi-eye-slash fs-2"></i>
                        <i class="bi bi-eye fs-2 d-none"></i>
                    </span>
                </div>
                <!--end::Input wrapper-->
            </div>
            <!--end::Wrapper-->

            <!--begin::Hint-->
            <div class="text-muted">
                {{ __('Use 6 or more characters with a mix of letters, numbers & symbols.') }}
            </div>
            <!--end::Hint-->
        </div>
        <!--end::Input group--->

        <!--begin::Input group-->
        <div class="fv-row mb-10">
            <label class="form-label fw-bolder text-gray-900 fs-6">{{ __('Confirm Password') }}</label>
            <input class="form-control @error('password') is-invalid @enderror" type="password" name="password_confirmation" autocomplete="off" required/>
            @error('password') 
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <!--end::Input group-->

        <!--begin::Actions-->
        <div class="d-flex flex-wrap justify-content-center pb-lg-0">
            <button type="submit" id="kt_new_password_submit" class="btn btn-lg btn-primary fw-bolder me-4">
                {{ __('Update') }}
            </button>

            <a href="{{ route('login') }}" class="btn btn-lg btn-light-primary fw-bolder">{{ __('Cancel') }}</a>
        </div>
        <!--end::Actions-->
    </form>
    <!--end::Reset Password Form-->

</x-auth-layout>
