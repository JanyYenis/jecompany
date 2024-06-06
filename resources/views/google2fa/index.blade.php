@extends('layouts.app')
  
@section('content')
<div class="d-flex flex-center flex-column flex-column-fluid">
    <div class="w-lg-600px p-10 p-lg-15 mx-auto">
        <form class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework" action="{{ route('2fa') }}" method="POST"
            id="formGoogle2FA" data-kt-redirect-url='{{ route('home') }}'>
            @csrf
            <div class="text-center mb-10">
                <h1 class="text-dark mb-3">
                    Verificación en dos pasos
                </h1>
                <div class="text-gray-400 fw-semibold fs-4">
                    Ingrese la <strong>OTP</strong> generada en su aplicación de autenticación. <br>
                    Asegúrese de enviar el código actual porque es se actualiza cada 30 segundos.
                </div>
            </div>

            @if($errors->any())
                <div class="col-md-12">
                    <div class="alert alert-danger">
                        <strong>{{$errors->first()}}</strong>
                    </div>
                </div>
            @endif
            
            <div class="fv-row mb-10 fv-plugins-icon-container">
                <label class="form-label fw-bold text-gray-900 fs-6">Código</label>
                <div id="pinwrapper" class="text-center"></div>
                <input class="form-control form-control-lg form-control-solid" type="hidden" placeholder="Ingrese el código" id="campoCodigo" name="one_time_password">
                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                </div>
            </div>

            <div class="d-flex flex-wrap justify-content-center pb-lg-0">
                <button type="submit" id="btnGoogle2FA" class="btn btn-lg btn-primary fw-bold me-4">
                    <span class="indicator-label">
                        Enviar
                    </span>
                    <span class="indicator-progress">
                        Enviando...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('js')
    <script src="{{ asset('js/google2fa/principal.js') }}"></script>
@endsection