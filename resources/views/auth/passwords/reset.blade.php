@extends('layouts.app')

@section('content')
    <div class="d-flex flex-center flex-column flex-column-fluid">
        <div class="w-lg-600px p-10 p-lg-15 mx-auto">
            <form class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework" data-kt-redirect-url="{{ route('login') }}"
                id="kt_new_password_form" method="POST" action="{{ route('password.update') }}">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="text-center mb-10">
                    <h1 class="text-dark mb-3">
                        Configurar nueva contraseña
                    </h1>
                    <div class="text-gray-400 fw-semibold fs-4">
                        ¿Ya has restablecido tu contraseña?
                        <a href="{{ route('login') }}" class="link-primary fw-bold">
                            Login
                        </a>
                    </div>
                </div>
                <div class="fv-row mb-10 fv-plugins-icon-container">
                    <label class="form-label fw-bold text-gray-900 fs-6">Email</label>
                    <input class="form-control form-control-solid" type="email" value="{{ $email ?? old('email') }}"
                        required readonly placeholder="" name="email">
                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                </div>
                <div class="mb-10 fv-row fv-plugins-icon-container" data-kt-password-meter="true">
                    <div class="mb-1">
                        <label class="form-label fw-bold text-dark fs-6">
                            Password
                        </label>
                        <div class="position-relative mb-3">
                            <input class="form-control form-control-lg form-control-solid" type="password" placeholder=""
                                name="password" autocomplete="off">
                            <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                data-kt-password-meter-control="visibility">
                                <i class="far fa-eye fs-2"></i>
                                <i class="far fa-eye-slash d-none fs-2"></i>
                            </span>
                        </div>
                        <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                            </div>
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                            </div>
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                            </div>
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                        </div>
                    </div>
                    <div class="text-muted">
                        Utilice 8 o más caracteres con una combinación de letras, números y caracteres. símbolos.
                    </div>
                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                    </div>
                </div>
                <div class="fv-row mb-10 fv-plugins-icon-container">
                    <label class="form-label fw-bold text-dark fs-6">Confirmar Password</label>
                    <input class="form-control form-control-lg form-control-solid" type="password" placeholder=""
                        name="password_confirmation" autocomplete="off">
                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                </div>
                <div class="fv-row mb-10 fv-plugins-icon-container">
                    <div class="form-check form-check-custom form-check-solid form-check-inline">
                        <input class="form-check-input" type="checkbox" name="toc" value="1">
                        <label class="form-check-label fw-semibold text-gray-700 fs-6">
                            Estoy de acuerdo y acepto los
                            <a href="#" class="ms-1 link-primary">Terminos y condiciones</a>.
                        </label>
                    </div>
                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                </div>
                <div class="text-center">
                    <button type="button" id="kt_new_password_submit" class="btn btn-lg btn-primary fw-bold">
                        <span class="indicator-label">
                            Cambiar Contraseña
                        </span>
                        <span class="indicator-progress">
                            Cambiando...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!--begin::Footer-->
    <div class="d-flex flex-center flex-column-auto p-10">
        <!--begin::Links-->
        <div class="d-flex align-items-center fw-semibold fs-6">
            <a href="https://keenthemes.com" class="text-muted text-hover-primary px-2">About</a>

            <a href="https://devs.keenthemes.com" class="text-muted text-hover-primary px-2">Support</a>

            <a href="https://keenthemes.com/products/jet-html-pro" class="text-muted text-hover-primary px-2">
                Purchase
            </a>
        </div>
        <!--end::Links-->
    </div>
    <!--end::Footer-->
    </div>
    <!--end::Authentication - New password-->
    </div>
@endsection

@section('js')
    <script src="{{ asset('assets/js/custom/authentication/reset-password/new-password.js') }}"></script>
@endsection
