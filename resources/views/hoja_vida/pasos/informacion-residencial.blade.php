@foreach ($direcciones as $item)
    <div class="row">
        <label class="col-lg-5 col-md-5 col-xl-5 col-12 label-left col-form-label align-self-center">
            <span>{{$item?->direccion ?? 'N/A'}}</span> <br>
            <span><b>Tipo Vivienda: </b>{{$item?->infoTipoVievienda?->nombre ?? 'N/A'}} </span> <br>
            <span><b> Estrato: </b> {{($item?->infoEstractoSocieconomico?->codigo ?? 0).' - '.$item?->infoEstractoSocieconomico?->nombre ?? 'N/A'}} </span> <br>
        </label>
        <div class="col-lg-3 col-md-3 col-xl-3 col-12 align-self-center text-lg-center">
            @component('sistema.estado')
                @slot('concepto', $item?->infoEstado)
            @endcomponent
        </div>
        <div class="col-lg-4 col-md-4 col-xl-4 col-12 align-self-center text-lg-center">
            <!--begin::Menu wrapper-->
            <div>
                <button type="button" class="btn btn-bg-secondary rotate" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-offset="30px, 30px">
                    Opciones
                </button>

                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                    <div class="menu-item px-3">
                        <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">
                            Opciones
                        </div>
                    </div>
                    <div class="separator mb-3 opacity-75"></div>
                    <div class="menu-item px-3">
                        <a href="{{ route('usuarios.edit', $model->id)}}" class="menu-link fs-5 px-3 btnEditar">
                            <i class="fas fa-user-edit text-warning fs-4 m-2"></i>
                            Editar
                        </a>
                    </div>
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link fs-5 px-3 btnEliminar" data-registro="{{$model->id}}">
                            <i class="fas fa-trash text-danger fs-4 m-2"></i>
                            Eliminar
                        </a>
                    </div>
                </div>
            </div>
            <!--end::Dropdown wrapper-->
        </div>
    </div>
@endforeach