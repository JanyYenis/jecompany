@extends('layouts.index', ['title' => 'Tareas'])

@section('breadcrumb')
    <li class="breadcrumb-item text-dark">
        <a href="{{ route('tareas.index') }}" class="text-dark">Tareas</a>
    </li>
@endsection

@section('preferenciasB')
    @component('tareas.filtro')
    @endcomponent
@endsection

@section('content')
    <div class="d-flex flex-column flex-lg-row">
        <div class="flex-column flex-lg-row-auto w-100 mb-10 mb-lg-0">
            <div class="card card-flush">
                <div class="card-body pt-5" id="kt_chat_contacts_body">
                    <div id="jkanbanDetalleCampana"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('modal')
    @component('tareas.modals.crear')
        @slot('responsables', $responsables)
    @endcomponent
    @component('tareas.modals.modal')
    @endcomponent
@endsection

@section('scripts')
    <script src="{{ mix('/js/tareas/principal.js') }}"></script>
@endsection