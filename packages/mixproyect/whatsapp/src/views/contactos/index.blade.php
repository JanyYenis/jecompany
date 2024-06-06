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
                        <h1 class="text-verdoso mulish">Contacto</h1>
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCargarContacto">
                                <i class="las la-cloud-upload-alt fs-2 text-white"></i>
                                Cargar Contacto
                            </button>&nbsp;
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCrearContacto">
                                <i class="fas fa-user-plus text-white"></i>
                                Crear Contacto
                            </button>
                        </div>
                    </div>
                    <div class="card-body pt-5" id="kt_chat_contacts_body">
                        <div class="scroll-y me-n5 pe-5 h-200px h-lg-auto tablasScroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_header, #kt_toolbar, #kt_footer, #kt_chat_contacts_header" data-kt-scroll-wrappers="#kt_content, #kt_chat_contacts_body" data-kt-scroll-offset="5px" style="max-height: 480px !important;">
                            <div class="table-responsive">
                                <table border="1" class="table table-striped table-bordered" id="tablaContactos">
                                    <thead>
                                        <tr>
                                            <th width="5%" class="text-center all">#</th>
                                            <th width="10%" class="text-center all">Nombre</th>
                                            <th width="10%" class="text-center all">Identificacion</th>
                                            <th width="10%" class="text-center all">Email</th>
                                            <th width="10%" class="text-center all">Telefono</th>
                                            <th width="10%" class="text-center all">Estado</th>
                                            <th width="10%" class="text-center none">Tipo Identificación</th>
                                            <th width="10%" class="text-center none">Fecha creación</th>
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
    @component('whatsapp::contactos.modals.crear')
        @slot('etiquetas', $etiquetas)
    @endcomponent
    @component('whatsapp::contactos.modals.modal')
    @endcomponent
    @component('whatsapp::contactos.modals.cargar')
    @endcomponent
@endsection

@section('scripts')
    <script src="{{ mix('/js/whatsapp/contactos/principal.js') }}" ></script>
@endsection