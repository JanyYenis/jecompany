@php
    $usuario = auth()->user();
@endphp
@extends('layouts.index')

@section('content')
    <div class="d-flex flex-column flex-lg-row">
        <div class="flex-column flex-lg-row-auto w-100 mb-10 mb-lg-0">
            <div class="card card-flush">
                <div class="card-header pt-7" id="kt_chat_contacts_header">
                    <h1 class="text-verdoso mulish">Mi Hoja de Vida</h1>
                </div>
                <div class="card-body pt-5" id="kt_chat_contacts_body">
                    <div class="stepper stepper-pills" id="kt_stepper_example_clickable">
                        <div class="stepper-nav flex-center flex-wrap mb-10">
                            <!--begin::Step 1-->
                            <div class="stepper-item mx-8 my-4 current" data-kt-stepper-element="nav" data-kt-stepper-action="step">
                                <div class="stepper-wrapper d-flex align-items-center">
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">1</span>
                                    </div>
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">
                                            Información Personal
                                        </h3>
                                    </div>
                                </div>
                                <div class="stepper-line h-40px"></div>
                            </div>
                            <!--end::Step 1-->
                            <!--begin::Step 2-->
                            <div class="stepper-item mx-8 my-4" data-kt-stepper-element="nav" data-kt-stepper-action="step">
                                <div class="stepper-wrapper d-flex align-items-center">
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">2</span>
                                    </div>
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">
                                            Información Contacto
                                        </h3>
                                    </div>
                                </div>
                                <div class="stepper-line h-40px"></div>
                            </div>
                            <!--end::Step 2-->
                            <!--begin::Step 2-->
                            <div class="stepper-item mx-8 my-4" data-kt-stepper-element="nav" data-kt-stepper-action="step">
                                <div class="stepper-wrapper d-flex align-items-center">
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">3</span>
                                    </div>
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">
                                            Información Adicional
                                        </h3>
                                    </div>
                                </div>
                                <div class="stepper-line h-40px"></div>
                            </div>
                            <!--end::Step 2-->
                            <!--begin::Step 2-->
                            <div class="stepper-item mx-8 my-4" data-kt-stepper-element="nav" data-kt-stepper-action="step">
                                <div class="stepper-wrapper d-flex align-items-center">
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">4</span>
                                    </div>
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">
                                            Información Académica
                                        </h3>
                                    </div>
                                </div>
                                <div class="stepper-line h-40px"></div>
                            </div>
                            <!--end::Step 2-->
                            <div class="stepper-item mx-8 my-4" data-kt-stepper-element="nav" data-kt-stepper-action="step">
                                <div class="stepper-wrapper d-flex align-items-center">
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">5</span>
                                    </div>
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">
                                            Experiencia
                                        </h3>
                                    </div>
                                </div>
                                <div class="stepper-line h-40px"></div>
                            </div>
                            <!--end::Step 2-->
                            <!--end::Step 2-->
                            <div class="stepper-item mx-8 my-4" data-kt-stepper-element="nav" data-kt-stepper-action="step">
                                <div class="stepper-wrapper d-flex align-items-center">
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">6</span>
                                    </div>
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">
                                            Referencia Personal
                                        </h3>
                                    </div>
                                </div>
                                <div class="stepper-line h-40px"></div>
                            </div>
                            <!--end::Step 2-->
                        </div>
                        <!--end::Nav-->
                        <input type="hidden" id="idUsuario" name="id_usuario" value="{{$usuario->id}}">
                        <input type="hidden" id="idHoja" name="id" value="{{$hoja?->id ?? ''}}">
                        <div class="mb-5">
                            <!--begin::Step 1-->
                            <div class="flex-column current" data-kt-stepper-element="content">
                                @component('hoja_vida.pasos.informacion-personal')
                                    @slot('usuario', $usuario)
                                    @slot('paises', $paises)
                                    @slot('generos', $generos)
                                    @slot('tipos_documentos', $tipos_documentos)
                                    @slot('direcciones', $direcciones)
                                @endcomponent
                            </div>
                            <!--begin::Step 1-->

                            <!--begin::Step 2-->
                            <div class="flex-column" data-kt-stepper-element="content">
                                <form id="formHojaVida2">
                                    <!--begin::Alert-->
                                    <div class="alert alert-dismissible bg-light-primary border border-primary d-flex flex-column flex-sm-row p-5 mb-10">
                                        <i class="fas fa-exclamation fs-2hx text-primary me-4 mb-5 mb-sm-0">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                        <div class="d-flex flex-column pe-0 pe-sm-10">
                                            <h5 class="mb-1">Información importante</h5>
                                            <li>
                                                <span>
                                                    Enumera tus títulos académicos en orden cronológico inverso.
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    Incluye el nombre de la institución, la ubicación, las fechas de asistencia y el título obtenido.
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    Puedes mencionar honores, becas o proyectos académicos relevantes.
                                                </span>
                                            </li>
                                        </div>
                                        <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
                                            <i class="las la-times fs-1 text-primary">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </button>
                                    </div>
                                    <!--end::Alert-->
                                    <div class="row mb-7">
                                        <div class="kt_docs_quill_autosave" name="info_formacion">
                                            {!! $hoja->info_formacion ?? '' !!}
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-success">Guardar</button>
                                    </div>
                                </form>
                            </div>
                            <!--begin::Step 2-->

                            <!--begin::Step 2-->
                            <div class="flex-column" data-kt-stepper-element="content">
                                <form id="formHojaVida3">
                                    <!--begin::Alert-->
                                    <div class="alert alert-dismissible bg-light-primary border border-primary d-flex flex-column flex-sm-row p-5 mb-10">
                                        <i class="fas fa-exclamation fs-2hx text-primary me-4 mb-5 mb-sm-0">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                        <div class="d-flex flex-column pe-0 pe-sm-10">
                                            <h5 class="mb-1">Información importante</h5>
                                            <span>Describe el cargo que deseas ocupar en la empresa.</span>
                                        </div>
                                        <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
                                            <i class="las la-times fs-1 text-primary">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </button>
                                    </div>
                                    <!--end::Alert-->
                                    <div class="row mb-7">
                                        <div class="kt_docs_quill_autosave" name="info_ocupacion">
                                            {!! $hoja->info_ocupacion ?? '' !!}
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-success">Guardar</button>
                                    </div>
                                </form>
                            </div>
                            <!--begin::Step 2-->

                            <!--begin::Step 2-->
                            <div class="flex-column" data-kt-stepper-element="content">
                                <form id="formHojaVida4">
                                    <!--begin::Alert-->
                                    <div class="alert alert-dismissible bg-light-primary border border-primary d-flex flex-column flex-sm-row p-5 mb-10">
                                        <i class="fas fa-exclamation fs-2hx text-primary me-4 mb-5 mb-sm-0">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                        <div class="d-flex flex-column pe-0 pe-sm-10">
                                            <h5 class="mb-1">Información importante</h5>
                                            <li>
                                                <span>
                                                    Enumera tus trabajos anteriores en orden cronológico inverso (del más reciente al más antiguo).
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    Incluye el nombre de la empresa, la ubicación, las fechas de empleo y tu puesto.
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    Proporciona una descripción de tus responsabilidades y logros en cada puesto.
                                                </span>
                                            </li>
                                        </div>
                                        <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
                                            <i class="las la-times fs-1 text-primary">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </button>
                                    </div>
                                    <!--end::Alert-->
                                    <div class="row mb-7">
                                        <div class="kt_docs_quill_autosave" name="info_experiencia">
                                            {!! $hoja->info_experiencia ?? '' !!}
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-success">Guardar</button>
                                    </div>
                                </form>
                            </div>
                            <!--begin::Step 2-->

                            <!--begin::Step 2-->
                            <div class="flex-column" data-kt-stepper-element="content">
                                <form id="formHojaVida5">
                                    <!--begin::Alert-->
                                    <div class="alert alert-dismissible bg-light-primary border border-primary d-flex flex-column flex-sm-row p-5 mb-10">
                                        <i class="fas fa-exclamation fs-2hx text-primary me-4 mb-5 mb-sm-0">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                        <div class="d-flex flex-column pe-0 pe-sm-10">
                                            <h5 class="mb-1">Información importante</h5>
                                            <span>Puedes escribir la informacion personal de tus familiares como:</span>
                                            <div class="container">
                                                <li>Nombre completo</li>
                                                <li>Vinculo familiar</li>
                                                <li>Cargo</li>
                                                <li>Empresa</li>
                                                <li>Telefono</li>
                                            </div>
                                        </div>
                                        <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
                                            <i class="las la-times fs-1 text-primary">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </button>
                                    </div>
                                    <!--end::Alert-->
                                    <div class="row mb-7">
                                        <div class="kt_docs_quill_autosave" name="info_referencias_f">
                                            {!! $hoja->info_referencias_f ?? '' !!}
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-success">Guardar</button>
                                    </div>
                                </form>
                            </div>
                            <!--begin::Step 2-->

                            <!--begin::Step 2-->
                            <div class="flex-column" data-kt-stepper-element="content">
                                <form id="formHojaVida6">
                                    <!--begin::Alert-->
                                    <div class="alert alert-dismissible bg-light-primary border border-primary d-flex flex-column flex-sm-row p-5 mb-10">
                                        <i class="fas fa-exclamation fs-2hx text-primary me-4 mb-5 mb-sm-0">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                        <div class="d-flex flex-column pe-0 pe-sm-10">
                                            <h5 class="mb-1">Información importante</h5>
                                            <span>Puedes escribir la informacion personal de tus contactos como:</span>
                                            <div class="container">
                                                <li>Nombre completo</li>
                                                <li>Vinculo familiar</li>
                                                <li>Cargo</li>
                                                <li>Empresa</li>
                                                <li>Telefono</li>
                                            </div>
                                        </div>
                                        <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
                                            <i class="las la-times fs-1 text-primary">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </button>
                                    </div>
                                    <!--end::Alert-->
                                    <div class="row mb-7">
                                        <div class="kt_docs_quill_autosave" name="info_referencias_p">
                                            {!! $hoja->info_referencias_p ?? '' !!}
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-success">Guardar</button>
                                    </div>
                                </form>
                            </div>
                            <!--begin::Step 2-->
                        </div>

                        <!--begin::Actions-->
                        <div class="d-flex flex-stack">
                            <div class="me-2">
                                <button type="button" class="btn btn-primary" data-kt-stepper-action="previous">
                                    Atras
                                </button>
                            </div>
                            <div>
                                <button type="button" class="btn btn-primary btnTerminar" data-kt-stepper-action="submit">
                                    Terminar
                                </button>
                                <button type="button" class="btn btn-primary btnNext" data-kt-stepper-action="next">
                                    Siguiente
                                </button>
                            </div>
                        </div>
                        <!--end::Actions-->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ mix('/js/hoja_vida/principal.js') }}" ></script>
@endsection