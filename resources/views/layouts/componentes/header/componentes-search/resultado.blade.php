@php
    $resultados = $resultados ?? [];
    $tituloResultados = $tituloResultados ?? 'N/A';
@endphp
<div class="scroll-y mh-200px mh-lg-350px">
    <!--begin::Category title-->
    <h3 class="fs-5 text-muted m-0  pb-5" data-kt-search-element="category-title">
        {{$tituloResultados}}
    </h3>
    <!--end::Category title-->

    @foreach ($resultados as $resultado)
        <!--begin::Item-->
        <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5 btnSeleccionarOpcionSearch" data-id="{{$resultado['id']}}">
            <!--begin::Symbol-->
            <div class="symbol symbol-40px me-4">
                @if ($resultado['tipo'])
                    <i class="{{ $resultado['icono'] }} text-primary"></i>
                @else
                    <img src="{{asset($resultado['icono'])}}" alt="">
                @endif
            </div>
            <!--end::Symbol-->

            <!--begin::Title-->
            <div class="d-flex flex-column justify-content-start fw-semibold">
                <span class="fs-6 fw-semibold">{{ $resultado['texto'] }}</span>
                <span class="fs-7 fw-semibold text-muted">{{ $resultado['descripcion'] }}</span>
            </div>
            <!--end::Title-->
        </a>
        <!--end::Item-->
    @endforeach
</div>