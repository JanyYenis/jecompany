@php
    $QrCode = $QrCode ?? null;
@endphp
@if ($QrCode)
    <div class="text-center">
        <img src="data:image/svg+xml;base64,{{ base64_encode($QrCode) }}" width="60%">
        {{-- <img src="data:image/png;base64,{{ base64_encode($QrCode) }}" width="60%"> --}}
    </div>
@else
    <img src="{{ asset('img/qr-demo.png') }}" width="100%">
@endif