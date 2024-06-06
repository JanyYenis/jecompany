@if ($model->estado == 1)
    <div class="text-center">
        <span class="py-5 px-5 text-success">
            <i class="fas fa-check-circle text-success"></i>
            Enviado
        </span>
    </div>   
@endif

@if ($model->estado == 2)    
    <div class="text-center">
        <span class="py-5 px-5 text-danger">
            <i class="far fa-times-fas fa-clock text-danger"></i>
            Inactivo
        </span>
    </div>
@endif

@if ($model->estado == 3)    
    <div class="text-center">
        <span class="py-5 px-5 text-warning">
            <i class="far fa-clock text-warning"></i>
            Programado
        </span>
    </div>
@endif