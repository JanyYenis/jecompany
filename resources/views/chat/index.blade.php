@extends('layouts.index')

@section('content')
    <div class="d-flex flex-column flex-lg-row">
        <div class="flex-column flex-lg-row-auto w-100 w-lg-300px w-xl-400px mb-10 mb-lg-0">
            <div class="card card-flush" style="min-height: 45rem; max-height: 45rem;">
                <div class="card-header pt-7" id="kt_chat_contacts_header">
                    <form class="w-100 position-relative" autocomplete="off">
                        <i class="fas fa-search fs-3 text-gray-500 position-absolute top-50 ms-5 translate-middle-y">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i> 
        
                        <input type="text" class="form-control form-control-solid px-13" name="search" value=""
                            placeholder="Buscar por nombre o email">
                    </form>
                </div>
                <div class="card-body pt-5" id="kt_chat_contacts_body">
                    <div class="scroll-y me-n5 pe-5 h-200px h-lg-auto" data-kt-scroll="true"
                        data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                        data-kt-scroll-dependencies="#kt_header, #kt_app_header, #kt_toolbar, #kt_app_toolbar, #kt_footer, #kt_app_footer, #kt_chat_contacts_header"
                        data-kt-scroll-wrappers="#kt_content, #kt_app_content, #kt_chat_contacts_body"
                        data-kt-scroll-offset="5px" style="max-height: 397px;">

                        <div class="seccionContactos">
                            @component('chat.contactos')
                                @slot('usuarios', $usuarios)
                            @endcomponent
                        </div>

                    </div>
                </div>
            </div>
        </div>
        
        <!--begin::Content-->
        <div class="flex-lg-row-fluid ms-lg-7 ms-xl-10">
            <!--begin::Messenger-->
            <div class="card" id="kt_chat_messenger" style="min-height: 45rem; max-height: 45rem;">
                <div class="seccionChat">
                    <div class="d-flex justify-content-center p-4">
                        <img src="{{ mix('img/fondo.jpg') }}" style="min-height: 43rem; max-height: 43rem;">
                    </div>
                </div>
            </div>
            <!--end::Messenger-->
        </div>
        <!--end::Content-->
    </div>
@endsection

@section('modal')
<div class="modal fade" tabindex="-1" id="modalCapturarFoto">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title">
                    <i class="fas fa-camera text-danger fs-2tx"></i>
                    Camara
                </h1>
                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="las la-times fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
                <form id="formCamara" enctype="multipart/form-data">
                    <div class="d-flex justify-content-center">
                        <div class="">
                            <div class="border-gray-300 border-dotted">
                                <video id="video" width="640" height="480" autoplay></video>
                                <canvas id="canvas" width="640" height="480" style="display:none;"></canvas>
                                <img id="photo" alt="Tu foto aparecerá aquí" style="display:none;">
                            </div>
                            <div class="mt-3 d-none" id="mensajeInput">
                                <input type="text" class="form-control form-control-solid" name="mensaje" placeholder="Mensaje">
                                <input type="file" class="form-control form-control-solid d-none" name="archivo">
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-4">
                        <button type="button" class="btn btn-danger" id="capture" >
                            <i class="fas fa-camera fs-1"></i>
                        </button>
                        <button type="button" class="btn btn-danger me-2 d-none" id="captureOtra">Cambiar Foto</button>
                        <button type="submit" class="btn btn-success d-none" id="enviar" >
                            <i class="far fa-paper-plane fs-1"></i>
                        </button>
                    </div>
                </form>
            </div>

            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-light btnClose" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="{{ mix('js/chat/principal.js') }}"></script>
@endsection