@extends('layouts.index')

@section('content')
    <div class="d-flex flex-column flex-lg-row">
        <div class="flex-column flex-lg-row-auto w-100 mb-10 mb-lg-0">
            <div class="card card-flush">
                <div class="card-header pt-7" id="kt_chat_contacts_header">
                    <h1 class="text-verdoso mulish">Hoja de Vida</h1>
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('hoja-de-vida.create') }}" type="button" class="btn btn-primary">
                            <i class="far fa-newspaper fs-2 text-white"></i>
                            Mi Hoja de Vida
                        </a>
                    </div>
                </div>
                <div class="card-body pt-5" id="kt_chat_contacts_body">
                    <div class="scroll-x me-n5 pe-5 h-200px h-lg-auto tablasScroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_header, #kt_toolbar, #kt_footer, #kt_chat_contacts_header" data-kt-scroll-wrappers="#kt_content, #kt_chat_contacts_body" data-kt-scroll-offset="5px" style="max-height: 410px;">
                        <!--begin::Alert-->
                        <div class="alert alert-dismissible bg-light-primary border border-primary d-flex flex-column flex-sm-row p-5 mb-10">
                            <i class="fas fa-exclamation fs-2hx text-primary me-4 mb-5 mb-sm-0">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                            </i>
                            <div class="d-flex flex-column pe-0 pe-sm-10">
                                <h5 class="mb-1">Información importante</h5>
                                <span>Estas son las plantillas que tenemos disponibles para ti.</span>
                            </div>
                            <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
                                <i class="las la-times fs-1 text-primary">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </button>
                        </div>
                        <!--end::Alert-->
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card shadow-sm">
                                    <div class="card-header">
                                        <h3 class="card-title">Plantilla 1</h3>
                                        <div class="py-3">
                                            <a href="{{ route('hoja-de-vida.descargar', auth()->user()->id) }}" target="_blank" type="button" class="btn btn-danger">
                                                <i class="far fa-file-pdf fs-2"></i>
                                                PDF
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body py-4">
                                        <div class="text-center px-2">
                                            <!--begin::Overlay-->
                                            <a class="d-block overlay" data-fslightbox="lightbox-basic" href="{{mix('img/hojas_de_vida/plantilla_1.png')}}">
                                                <!--begin::Image-->
                                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-400px"
                                                    style="background-image:url('{{mix('img/hojas_de_vida/plantilla_1.jpg')}}')">
                                                </div>
                                                <!--end::Image-->

                                                <!--begin::Action-->
                                                <div class="overlay-layer card-rounded bg-dark bg-opacity-25 shadow">
                                                    <i class="bi bi-eye-fill text-white fs-3x"></i>
                                                </div>
                                                <!--end::Action-->
                                            </a>
                                            <!--end::Overlay-->

                                            {{-- <img class="mw-100 mh-300px card-rounded" alt="" src="{{mix('img/hojas_de_vida/plantilla_1.jpg')}}"/> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection