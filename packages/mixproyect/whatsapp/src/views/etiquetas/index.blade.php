@extends('layouts.index')

@section('css')
@endsection

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="contenedor" id="kt_content_container">
        <div class="d-flex flex-column flex-lg-row">
            <div class="flex-column flex-lg-row-auto w-100 mb-10 mb-lg-0">
                <div class="card card-flush">
                    <div class="card-header pt-7">
                        <h1 class="text-verdoso mulish">Etiqueta</h1>
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCrearContacto">
                                <i class="fas fa-user-plus text-white"></i>
                                Crear Etiqueta
                            </button>
                        </div>
                    </div>
                    <div class="card-body pt-5" id="kt_chat_contacts_body">
                        <div class="scroll-y me-n5 pe-5 h-200px h-lg-auto tablasScroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_header, #kt_toolbar, #kt_footer, #kt_chat_contacts_header" data-kt-scroll-wrappers="#kt_content, #kt_chat_contacts_body" data-kt-scroll-offset="5px" style="max-height: 480px !important;">
                            <div class="table-responsive">
                                <table border="1" class="table table-striped table-bordered" id="tablaEtiqueta">
                                    <thead>
                                        <tr>
                                            <th width="5%" class="text-center all">#</th>
                                            <th width="10%" class="text-center all">Nombre</th>
                                            <th width="10%" class="text-center all">Estado</th>
                                            <th width="10%" class="text-center all">Fecha creación</th>
                                            <th width="10%" class="text-center all">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('modal')
    @component('whatsapp.etiqueta.modals.crear')
    @endcomponent
    @component('whatsapp.etiqueta.modals.modal')
    @endcomponent
@endsection

@section('scripts')
    <script src="{{ mix('/js/whatsapp/etiqueta/principal.js') }}" ></script>
@endsection