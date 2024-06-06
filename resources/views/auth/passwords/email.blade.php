@extends('layouts.app')

@section('content')
    <div class="d-flex flex-center flex-column flex-column-fluid">
        <div class="w-lg-600px p-10 p-lg-15 mx-auto">
            <form class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework"
                data-kt-redirect-url="{{ route('password.email') }}" action="{{ route('password.email') }}" method="POST"
                id="kt_password_reset_form">
                @csrf
                <div class="text-center mb-10">
                    <h1 class="text-dark mb-3">
                        ¿Has olvidado tu contraseña?
                    </h1>
                    <div class="text-gray-400 fw-semibold fs-4">
                        Ingrese su correo electrónico para restablecer su contraseña.
                    </div>
                </div>
                <div class="fv-row mb-10 fv-plugins-icon-container">
                    <label class="form-label fw-bold text-gray-900 fs-6">Email</label>
                    <input class="form-control form-control-lg form-control-solid" type="email" placeholder="" name="email">
                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                    </div>
                </div>

                <div class="d-flex flex-wrap justify-content-center pb-lg-0">
                    <button type="button" id="kt_password_reset_submit" class="btn btn-lg btn-primary fw-bold me-4">
                        <span class="indicator-label">
                            Enviar
                        </span>
                        <span class="indicator-progress">
                            Enviando...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                    </button>

                    <a href="{{ route('login') }}" class="btn btn-lg btn-light-primary fw-bold">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('assets/js/custom/authentication/reset-password/reset-password.js') }}"></script>
@endsection
