@extends('layouts.app')

@section('content')
    <div class="d-flex flex-center flex-column flex-column-fluid">
        <!--begin::Wrapper-->
        <div class="w-lg-600px p-10 p-lg-15 mx-auto">

            <!--begin::Form-->
            <form class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework"
                data-kt-redirect-url="{{ route('register') }}" id="kt_sign_up_form" method="POST" action="{{ route('register') }}">
                @csrf
                <!--begin::Heading-->
                <div class="mb-10 text-center">
                    <!--begin::Title-->
                    <h1 class="text-gray-900 mb-3">
                        Crear una cuenta
                    </h1>
                    <!--end::Title-->

                    <!--begin::Link-->
                    <div class="text-gray-500 fw-semibold fs-4">
                        ¿Ya tengienes una cuenta?
                        <a href="{{ route('login') }}" class="link-primary fw-bold">
                            Login
                        </a>
                    </div>
                    <!--end::Link-->
                </div>
                <!--end::Heading-->

                <!--begin::Action-->
                <button type="button" class="btn btn-light-primary fw-bold w-100 mb-10">
                    <img alt="Logo" src="{{ asset('assets/media/svg/brand-logos/google-icon.svg') }}" class="h-20px me-3">
                        Registrarme con Google
                </button>
                <!--end::Action-->

                <!--begin::Separator-->
                <div class="d-flex align-items-center mb-10">
                    <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                    <span class="fw-semibold text-gray-500 fs-7 mx-2">O</span>
                    <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                </div>
                <!--end::Separator-->

                <!--begin::Input group-->
                <div class="row fv-row mb-7 fv-plugins-icon-container">
                    <!--begin::Col-->
                    <div class="col-xl-6">
                        <label class="form-label fw-bold text-gray-900 fs-6">Nombre</label>
                        <input class="form-control form-control-lg form-control-solid" type="text" placeholder="" name="nombre" autocomplete="off">
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                        </div>
                    </div>
                    <!--end::Col-->

                    <!--begin::Col-->
                    <div class="col-xl-6">
                        <label class="form-label fw-bold text-gray-900 fs-6">Apellido</label>
                        <input class="form-control form-control-lg form-control-solid" type="text" placeholder="" name="apellido" autocomplete="off">
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                        </div>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="fv-row mb-7 fv-plugins-icon-container">
                    <label class="form-label fw-bold text-gray-900 fs-6">Email</label>
                    <input class="form-control form-control-lg form-control-solid" type="email" placeholder="" name="email" autocomplete="off">
                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="mb-10 fv-row fv-plugins-icon-container" data-kt-password-meter="true">
                    <!--begin::Wrapper-->
                    <div class="mb-1">
                        <!--begin::Label-->
                        <label class="form-label fw-bold text-gray-900 fs-6">
                            Password
                        </label>
                        <!--end::Label-->

                        <!--begin::Input wrapper-->
                        <div class="position-relative mb-3">
                            <input class="form-control form-control-lg form-control-solid" type="password" placeholder=""
                                name="password" autocomplete="off">

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
                        <!--end::Input wrapper-->

                        <!--begin::Meter-->
                        <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                        </div>
                        <!--end::Meter-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Hint-->
                    <div class="text-muted">
                        Utilice 8 o más caracteres con una combinación de letras, números y caracteres especiales.
                    </div>
                    <!--end::Hint-->
                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                </div>
                <!--end::Input group--->

                <!--begin::Input group-->
                <div class="fv-row mb-5 fv-plugins-icon-container">
                    <label class="form-label fw-bold text-gray-900 fs-6">Confirmar Password</label>
                    <input class="form-control form-control-lg form-control-solid" type="password" placeholder=""
                        name="password_confirmation" autocomplete="off">
                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="fv-row mb-10 fv-plugins-icon-container">
                    <label class="form-check form-check-custom form-check-solid form-check-inline">
                        <input class="form-check-input" type="checkbox" name="toc" value="1">
                        <span class="form-check-label fw-semibold text-gray-700 fs-6">
                            Estoy de acuerdo y acepto los <a href="#" class="ms-1 link-primary">Terminos y condiciones</a>.
                        </span>
                    </label>
                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                </div>
                <!--end::Input group-->

                <!--begin::Actions-->
                <div class="text-center">
                    <button type="button" id="kt_sign_up_submit" class="btn btn-lg btn-primary">
                        <span class="indicator-label">
                            Registrar
                        </span>
                        <span class="indicator-progress">
                            Cargando... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                    </button>
                </div>
                <!--end::Actions-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Wrapper-->
    </div>
@endsection

@section('js')
    <script src="{{ asset('assets/js/custom/authentication/sign-up/general.js') }}"></script>
@endsection
