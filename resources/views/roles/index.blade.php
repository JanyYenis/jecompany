@extends('layouts.index')

@section('breadcrumb')
    <li class="breadcrumb-item text-dark">
        <a href="{{ route('roles.index') }}" class="text-dark">Roles</a>
    </li>
@endsection

@section('content')
    <div class="d-flex flex-column flex-lg-row">
        <div class="flex-column flex-lg-row-auto w-100 mb-10 mb-lg-0">
            <div class="card card-flush">
                <div class="card-header pt-7" id="kt_chat_contacts_header">
                    <h1 class="text-verdoso mulish">Roles</h1>
                </div>
                <div class="card-body pt-5" id="kt_chat_contacts_body">
                    <div class="container mt-6">
                        {{-- <table id="tablaUsuarios" class="table align-middle table-row-dashed fs-6 gy-5 mb-0 dataTable no-footer">
                            <thead>
                                <tr class="fw-semibold fs-6 text-gray-800">
                                    <th class="text-center all">#</th>
                                    <th class="text-center all">Nombre</th>
                                    <th class="text-center all">Identificación</th>
                                    <th class="text-center none">Tipo Identificación</th>
                                    <th class="text-center none">Genero</th>
                                    <th class="text-center none">Nacimiento</th>
                                    <th class="text-center all">Telefono</th>
                                    <th class="text-center none">Ciudad</th>
                                    <th class="text-center all">Estado</th>
                                    <th class="text-center all">Acciones</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    {{-- <script src="{{ mix('/js/usuarios/principal.js') }}" ></script> --}}
@endsection