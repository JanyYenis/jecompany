<div class="d-flex align-items-center">
    <!--begin:: Avatar -->
    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
        <a href="{{ route('usuarios.edit', $id) }}">
            <div class="symbol-label">
                <img src="{{ asset($foto) }}" alt="{{$nombre_completo}}" class="w-100">
            </div>
        </a>
    </div>
    <!--end::Avatar-->
    <!--begin::User details-->
    <div class="d-flex flex-column">
        <a href="{{ route('usuarios.edit', $id) }}" class="text-gray-800 text-hover-primary mb-1">
            {{$nombre_completo}}
        </a>
        <span>{{$email}}</span>
    </div>
    <!--begin::User details-->
</td>
