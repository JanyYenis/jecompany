@extends('layouts.index')

@section('aside')
    @component('farma-d.componentes.aside')
    @endcomponent
@endsection

@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="contenedor" id="kt_content_container">
            <div class="d-flex flex-column flex-lg-row">
                <div class="flex-column flex-lg-row-auto w-100 mb-10 mb-lg-0">
                    <div class="card card-flush">
                        <div class="card-header pt-7" id="kt_chat_contacts_header">
                            <h1 class="text-verdoso mulish">Envios</h1>
                        </div>
                        <div class="card-body pt-5" id="kt_chat_contacts_body">
                            <div class="scroll-y me-n5 pe-5 h-200px h-lg-auto tablasScroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_header, #kt_toolbar, #kt_footer, #kt_chat_contacts_header" data-kt-scroll-wrappers="#kt_content, #kt_chat_contacts_body" data-kt-scroll-offset="5px" style="max-height: 410px;">
                                <div class="table-responsive">
                                    <table border="1" class="table table-striped table-bordered" id="tablaDetalleCampanas">
                                        <thead>
                                            <tr>
                                                <th width="5%" class="text-center all">#</th>
                                                <th width="10%" class="text-center all">Representante</th>
                                                <th width="10%" class="text-center all">Nombre Medico</th>
                                                <th width="10%" class="text-center all">Marca</th>
                                                <th width="10%" class="text-center all">Especialidad</th>
                                                <th width="10%" class="text-center all">Sub Linea</th>
                                                <th width="10%" class="text-center all">Panel</th>
                                                <th width="10%" class="text-center all">Abierto</th>
                                                <th width="10%" class="text-center all">Click (Respuestas)</th>
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
@endsection

@section('scripts')
    <script>window.idCampana = '{{$campana->cod_evento}}'</script>
    <script src="{{ mix('/js/farma-d/campanas/detalle.js') }}" ></script>
@endsection