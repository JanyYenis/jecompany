@extends('layouts.app')

@section('content')
    <div class="d-flex flex-center flex-column flex-column-fluid">
        <!--begin::Wrapper-->
        <div class="w-lg-500px p-10 p-lg-15 mx-auto">

            <!--begin::Form-->
            <form class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework"
                id="kt_sign_in_form" data-kt-redirect-url="{{route('login')}}" action="{{route('login')}}" method="POST">
                @csrf
                <!--begin::Heading-->
                <div class="text-center mb-10">
                    <!--begin::Title-->
                    <h1 class="text-gray-900 mb-3">Login</h1>
                    <!--end::Title-->

                    <!--begin::Link-->
                    <div class="text-gray-500 fw-semibold fs-4">
                        ¿No tienes una cuenta?

                        <a href="{{route('register')}}"
                            class="link-primary fw-bold">
                            Registrarme
                        </a>
                    </div>
                    <!--end::Link-->
                </div>
                <!--begin::Heading-->

                <!--begin::Input group-->
                <div class="fv-row mb-10 fv-plugins-icon-container">
                    <!--begin::Label-->
                    <label class="form-label fs-6 fw-bold text-gray-900">Email</label>
                    <!--end::Label-->

                    <!--begin::Input-->
                    <input class="form-control form-control-lg form-control-solid" type="text" name="email" autocomplete="off">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <!--end::Input-->
                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                    </div>
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="fv-row mb-10 fv-plugins-icon-container" data-kt-password-meter="true">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-stack mb-2">
                        <!--begin::Label-->
                        <label class="form-label fw-bold text-gray-900 fs-6 mb-0">Password</label>
                        <!--end::Label-->
                        
                        <!--begin::Link-->
                        <a href="{{route('password.request')}}" class="link-primary fs-6 fw-bold">
                            Olvide mi contraseña
                        </a>
                        <!--end::Link-->
                    </div>
                    <!--end::Wrapper-->
                    
                    <!--begin::Input-->
                    <div class="position-relative mb-3">
                        <input class="form-control form-control-lg form-control-solid" type="password" name="password" autocomplete="off">
                        <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                            <i class="far fa-eye fs-1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                            <i class="far fa-eye-slash d-none fs-1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                            </i>
                        </span>
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <!--end::Input-->
                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                    </div>
                </div>
                <!--end::Input group-->

                <!--begin::Actions-->
                <div class="text-center">
                    <!--begin::Submit button-->
                    <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
                        <span class="indicator-label">
                            Iniciar
                        </span>

                        <span class="indicator-progress">
                            Cargando... <span
                                class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                    </button>
                    <!--end::Submit button-->

                    <!--begin::Separator-->
                    <div class="text-center text-muted text-uppercase fw-bold mb-5">O</div>
                    <!--end::Separator-->

                    <!--begin::Google link-->
                    <a href="{{ route('login-google') }}" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
                        <img alt="Logo" src="{{ asset('assets/media/svg/brand-logos/google-icon.svg') }}" class="h-20px me-3">
                        Continuar con Google
                    </a>
                    <!--end::Google link-->

                    <!--begin::Outlook link-->
                    <a href="{{ route('login-outlook') }}" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
                        <img alt="Logo" src="{{ asset('assets/media/svg/brand-logos/outlook.png') }}" class="h-20px me-3">
                        Continuar con Outlook
                    </a>
                    <!--end::Outlook link-->

                    <!--begin::Facebook link-->
                    <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
                        <img alt="Logo" src="{{ asset('assets/media/svg/brand-logos/facebook-4.svg') }}" class="h-20px me-3">
                        Continuar con Facebook
                    </a>
                    <!--end::Facebook link-->
                </div>
                <!--end::Actions-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Wrapper-->
    </div>
@endsection

@section('js')
    <script src="{{ asset('assets/js/custom/authentication/sign-in/general.js') }}"></script>
@endsection