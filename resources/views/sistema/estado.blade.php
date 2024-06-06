
@php
    $color = $concepto?->color ?? '';
    $icono = $concepto?->icono ?? '';
    $nombreConcepto = $concepto?->nombre ?? '';
@endphp
{{-- <span class="btn btn-light-{{$color}} font-weight-bolder btn-sm">
    @if ($icono)
        <i class="kt-font-{{$color}} fa {{$icono}}" disabled></i>
    @endif
    {{" ".$nombreConcepto}}
</span> --}}
<div class="text-lg-center">
    <span class="badge badge-light-{{$color}} py-5 px-5">
        <i class="{{$icono}} text-{{$color}}"></i>&nbsp;{{ initcap($nombreConcepto) }}
    </span>
</div>