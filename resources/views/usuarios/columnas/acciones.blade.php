<!--begin::Menu wrapper-->
<div>
    <button type="button" class="btn btn-bg-secondary rotate" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-offset="30px, 30px">
        <i class="fas fa-ellipsis-h"></i>
    </button>

    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
        <div class="menu-item px-3">
            <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">
                Acciones
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
            <a href="#" class="menu-link fs-5 px-3 btnCambiarEstado" data-registro="{{$model->id}}">
                <i class="fas fa-pencil-alt text-info fs-4 m-2"></i>
                Cambiar Estado
            </a>
        </div>
        <div class="menu-item px-3">
            <a href="#" class="menu-link fs-5 px-3 btnRolesPermisos" data-registro="{{$model->id}}">
                <i class="fas fa-user-lock text-success fs-4 m-2"></i>
                Roles y Permisos
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