@extends('layouts.index')

@section('css')
    <link href="{{ mix('css/cel.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="contenedor" id="kt_content_container">
            <div class="d-flex flex-column flex-lg-row">
                <div class="flex-column flex-lg-row-auto w-100 mb-10 mb-lg-0">
                    <div class="card card-flush">
                        <div class="card-header pt-7" id="kt_chat_contacts_header">
                            <h1 class="text-verdoso mulish">Plantillas</h1>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalCrearPlantilla">
                                Crear Plantilla
                            </button>
                        </div>
                        <div class="card-body pt-5" id="kt_chat_contacts_body">
                            <div class="scroll-y me-n5 pe-5 h-200px h-lg-auto tablasScroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_header, #kt_toolbar, #kt_footer, #kt_chat_contacts_header" data-kt-scroll-wrappers="#kt_content, #kt_chat_contacts_body" data-kt-scroll-offset="5px" style="max-height: 410px;">
                                <div class="table-responsive">
                                    <table border="1" class="table table-striped table-bordered" id="tablaPlantilla">
                                        <thead>
                                            <tr>
                                                <th width="5%" class="text-center all">#</th>
                                                <th width="10%" class="text-center all">Nombre</th>
                                                <th width="10%" class="text-center all">Categoria</th>
                                                <th width="10%" class="text-center all">Lenguaje</th>
                                                <th width="10%" class="text-center all">Estado</th>
                                                <th width="30%" class="text-center all">Texto</th>
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
    @component('whatsapp::plantillas.modals.crear')
        @slot('numeroTel', $numeroTel)
    @endcomponent
    @component('whatsapp::plantillas.modals.ver')
    @endcomponent
    @component('whatsapp::plantillas.modals.modal')
    @endcomponent
@endsection

@section('scripts')
    <script src="{{ mix('/js/whatsapp/plantillas/principal.js') }}" ></script>
@endsection