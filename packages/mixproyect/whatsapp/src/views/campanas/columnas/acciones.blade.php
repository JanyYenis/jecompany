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
            <a href="{{ route('whatsapp.campanas.envios', ['campana' => $model->id]) }}" class="menu-link fs-5 px-3">
                <i class="fab fa-whatsapp text-success fs-3 m-2"></i>
                Enviados
            </a>
        </div>
    </div>
</div>
<!--end::Dropdown wrapper-->