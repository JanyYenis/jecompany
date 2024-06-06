@extends('layouts.index', ['title' => 'QR'])

@section('breadcrumb')
    <li class="breadcrumb-item text-dark">
        {{-- <a href="{{ route('tareas.index') }}" class="text-dark">Tareas</a> --}}
    </li>
@endsection

@section('content')
    <div class="d-flex flex-column flex-lg-row">
        <div class="flex-column flex-lg-row-auto w-100 mb-10 mb-lg-0">
            <div class="card card-flush">
                <div class="card-body pt-5" id="kt_chat_contacts_body">
                    <form id="formCrearQr">
                        <div class="row">
                            <div class="col-lg-8 col-md-8">
                                <div class="mt-3">
                                    <label class="fs-6 fw-semibold required">Url</label>
                                    <input type="url" name="url" class="form-control form-control-solid" placeholder="Url" id="" required>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg-6 col-md-6">
                                        <label class="fs-6 fw-semibold">Color de fondo</label>
                                        <input type="color" class="form-control form-control-solid" name="color_fondo" placeholder="Color de fondo" id="color">
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <label class="fs-6 fw-semibold">Color de los puntos</label>
                                        <input type="color" class="form-control form-control-solid" name="color_fondo" placeholder="Color de fondo" id="color">
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <label class="fs-6 fw-semibold">Logo</label>
                                    <input type="file" name="logo" class="form-control form-control-solid" accept="image/*" placeholder="Logo" id="">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="seccionQR">
                                    @component('qrs.qr')
                                    @endcomponent
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="reset" class="btn btn-light me-3">
                                Cancelar
                            </button>
    
                            <button type="submit" class="btn btn-primary">
                                <span class="indicator-label">
                                    Generar
                                </span>
                                <span class="indicator-progress">
                                    Cargando... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
    <script src="{{ mix('/js/qr/principal.js') }}"></script>
@endsection