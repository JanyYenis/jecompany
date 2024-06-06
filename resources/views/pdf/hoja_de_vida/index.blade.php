@extends('pdf.index')

@section('content')
    <header>
        <div class="">
            <img class="plantilla"
                src="data:image/png;base64,{{ base64_encode(file_get_contents(base_path('public/img/hojas_de_vida/plantilla_1.png'))) }}"
                alt="">
        </div>
        <div class="offset-10">
            {{-- <img class="QrReciclar"
                src="data:image/png;base64,{{ base64_encode(file_get_contents(base_path('public/images/QR_reciclar.png'))) }}"
                alt=""> --}}
        </div>
    </header>
    <div class="row">
        <div>
            {!! $hoja->info_personal ?? '' !!}
        </div>
    </div>
    <div class="row">
        <div>
            {!! $hoja->info_formacion ?? '' !!}
        </div>
    </div>
    <div class="row">
        <div>
            {!! $hoja->info_ocupacion ?? '' !!}
        </div>
    </div>
    <div class="row">
        <div>
            {!! $hoja->info_experiencia ?? '' !!}
        </div>
    </div>
    <div class="row">
        <div>
            {!! $hoja->info_referencias_f ?? '' !!}
        </div>
    </div>
    <div class="row">
        <div>
            {!! $hoja->info_referencias_p ?? '' !!}
        </div>
    </div>
@endsection
