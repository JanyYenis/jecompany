@if ($model->estado == 1)
    <div class="text-center">
        <span class="py-5 px-5 text-success">
            <i class="fas fa-check-circle text-success"></i>
            Activo
        </span>
    </div>   
@else
    <div class="text-center">
        <span class="py-5 px-5 text-danger">
            <i class="far fa-times-fas fa-clock text-danger"></i>
            Inactivo
        </span>
    </div>
@endif