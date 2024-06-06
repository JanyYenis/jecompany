@foreach ($usuarios as $usuario)
    <div class="d-flex flex-stack py-4">
        <div class="d-flex align-items-center">
            <a class="symbol symbol-45px symbol-circle" data-fslightbox="lightbox-basic" href="{{ $usuario?->foto ? asset($usuario?->foto) : asset('assets/media/avatars/150-2.jpg')}}">
                @if ($usuario?->foto)
                    <img src="{{ $usuario?->foto ? asset($usuario?->foto) : asset('assets/media/avatars/150-2.jpg')}}" alt="metronic" />
                @else
                    <span class="symbol-label bg-light-info text-info fs-6 fw-bolder">{{$usuario->nombre[0]}}</span>
                @endif
            </a>
            <div class="ms-5">
                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2 btnIrChat" data-contacto="{{$usuario->id}}">{{$usuario->nombre_completo}}</a>
                <div class="fw-semibold text-muted">{{$usuario->email}}</div>
            </div>
        </div>
        <div class="d-flex flex-column align-items-end ms-2">
            <span class="text-muted fs-7 mb-1">{{ fechaMensaje($usuario->fecha) }}</span>
        </div>
    </div>
    <div class="separator separator-dashed d-none"></div>
@endforeach