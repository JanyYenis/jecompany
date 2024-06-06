@extends('layouts.index')

@section('css')
    <!--begin::Image input placeholder-->
    <style>
        .image-input-placeholder {
            background-image: url('svg/avatars/blank.svg');
        }

        [data-bs-theme="dark"] .image-input-placeholder {
            background-image: url('svg/avatars/blank-dark.svg');
        }
    </style>
    <!--end::Image input placeholder-->
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item text-dark">
        <a href="{{ route('usuarios.edit', $usuario->id) }}" class="text-dark">Mi Perfil</a>
    </li>
@endsection

@section('content')
    <div class="d-flex flex-column flex-lg-row">
        <div class="flex-column flex-lg-row-auto w-100 mb-10 mb-lg-0">
            <div class="card mb-5 card-flush">
                <div class="card-header pt-7" id="kt_chat_contacts_header">
                    <h1 class="text-verdoso mulish">Mi Perfil</h1>
                </div>
                <div class="card-body pt-5" id="kt_chat_contacts_body">
                    <div class="stepper stepper-pills" id="kt_stepper_example_clickable">
                        <div class="stepper-nav flex-center flex-wrap mb-10">
                            <!--begin::Step 1-->
                            <div class="stepper-item mx-8 my-4 current" data-kt-stepper-element="nav"
                                data-kt-stepper-action="step">
                                <div class="stepper-wrapper d-flex align-items-center">
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">1</span>
                                    </div>
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">
                                            Información Basica
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
                                            Información de Contacto
                                        </h3>
                                    </div>
                                </div>
                                <div class="stepper-line h-40px"></div>
                            </div>
                            <!--end::Step 2-->
                        </div>
                        <!--end::Nav-->
                        <form class="form w-lg-900px mx-auto" id="formEditarUsuario" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="{{ $usuario->id }}">
                            <div class="mb-5">
                                <!--begin::Step 1-->
                                <div class="flex-column current" data-kt-stepper-element="content">
                                    <div class="row mb-7">
                                        <div class="d-flex justify-content-center">
                                            <!--begin::Image input-->
                                            <div class="image-input image-input-outline" data-kt-image-input="true"
                                                style="background-image: url({{ asset('assets/media/svg/avatars/blank.svg') }})">
                                                <div class="image-input-wrapper w-125px h-125px"
                                                    style="background-image: url({{ $usuario->foto ? asset($usuario->foto) : asset('assets/media/avatars/150-2.jpg') }})">
                                                </div>
                                                <!--begin::Edit button-->
                                                <label
                                                    class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                    data-bs-dismiss="click" title="Cargar Foto">
                                                    <i class="las la-pencil-alt fs-3">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                    <input type="file" name="avatar" id="avatarUsuario"
                                                        accept=".png, .jpg, .jpeg" />
                                                    <input type="hidden" name="avatar_remove" />
                                                </label>
                                                <!--end::Edit button-->

                                                <!--begin::Cancel button-->
                                                <span
                                                    class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                    data-bs-dismiss="click" title="Cancel avatar">
                                                    <i class="las la-times fs-3"></i>
                                                </span>
                                                <!--end::Cancel button-->

                                                <!--begin::Remove button-->
                                                <span
                                                    class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                    data-bs-dismiss="click" title="Remove avatar">
                                                    <i class="las la-times fs-3"></i>
                                                </span>
                                                <!--end::Remove button-->
                                            </div>
                                            <!--end::Image input-->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="fv-row mb-10">
                                                <label class="form-label required">Nombre</label>
                                                <input type="text" class="form-control" name="nombre"
                                                    value="{{ $usuario->nombre }}" placeholder="Nombre" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="fv-row mb-10">
                                                <label class="required form-label">Apellido</label>
                                                <input type="text" class="form-control" name="apellido"
                                                    value="{{ $usuario->apellido }}" placeholder="Apellido" required />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="fv-row mb-10">
                                                <label class="required form-label">Tipo identificación</label>
                                                <select name="tipo_documento" id="selectTipoIdentificacion"
                                                    data-control="select2"
                                                    data-placeholder="Seleccione el tipo de identificación"
                                                    data-allow-clear="true" data-hide-search="true" class="form-control"
                                                    required>
                                                    <option value=""></option>
                                                    @foreach ($tipos_documentos as $item)
                                                        <option value="{{ $item->codigo }}"
                                                            {{ $item?->codigo == $usuario?->tipo_documento ? 'selected' : '' }}>
                                                            {{ $item->nombre_corto }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="fv-row mb-10">
                                                <label class="required form-label">Identificación</label>
                                                <input type="text" class="form-control" name="identificacion"
                                                    value="{{ $usuario->identificacion }}" placeholder="Identifcación"
                                                    required />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="fv-row mb-10">
                                                <label class="required form-label">Genero</label>
                                                <select name="genero" id="selectTipoIdentificacion"
                                                    data-control="select2"
                                                    data-placeholder="Seleccione el tipo de identificación"
                                                    data-allow-clear="true" data-hide-search="true" class="form-control"
                                                    required>
                                                    <option value=""></option>
                                                    @foreach ($generos as $item)
                                                        <option value="{{ $item->codigo }}"
                                                            {{ $item?->codigo == $usuario?->genero ? 'selected' : '' }}>
                                                            {{ $item->nombre }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="fv-row mb-10">
                                                <label class="required form-label">Fecha nacimiento</label>
                                                <input class="form-control" placeholder="Fecha nacimiento" name="fecha"
                                                    value="{{ $usuario->fecha }}" id="kt_datepicker_1" required />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="fv-row mb-10">
                                                <label class="required form-label">País</label>
                                                <select class="form-control" name="pais_id" placeholder="..."
                                                    id="selectPais" required>
                                                    <option value="">Seleccione un país</option>
                                                    @foreach ($paises as $pais)
                                                        <option value="{{ $pais->id }}"
                                                            {{ $pais?->id == $usuario?->ciudad?->id_pais ? 'selected' : '' }}
                                                            data-kt-select2-country="{{ $pais->bandera }}">
                                                            {{ $pais->nombre }} - {{ $pais->nombre_corto }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="fv-row mb-10">
                                                <label class="required form-label">Ciudad</label>
                                                <select name="id_ciudad" id="selectCiudad"
                                                    data-ciudad="{{ $usuario?->id_ciudad }}" disabled
                                                    data-control="select2" data-placeholder="Seleccione una ciudad"
                                                    data-allow-clear="true" class="form-control" required>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--begin::Step 1-->

                                <!--begin::Step 2-->
                                <div class="flex-column" data-kt-stepper-element="content">
                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label class="required form-label">Email</label>
                                            <div class="input-group mb-10">
                                                <span class="input-group-text" id="basic-addon1">@</span>
                                                <input type="text" class="form-control" name="email" disabled
                                                    placeholder="Email" value="{{ $usuario->email }}" id="inputEmail"
                                                    required />
                                            </div>
                                        </div>
                                    </div>
                                    <!--begin::Repeater-->
                                    <div class="row mb-10">
                                        <div class="col-lg-6">
                                            <label class="required form-label">Telefono</label>
                                            <input type="tel" value="{{ '+' . $usuario->numero_completo }}"
                                                name="telefono" id="tel" class="form-control" maxlength="15"
                                                placeholder="Ingrese el teléfono" required data-default-country="co">
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-check form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" name="whatsapp"
                                                    value="1" id="form_checkbox"
                                                    {{ $usuario->whatsapp == 1 ? 'checked' : '' }} />
                                                <label class="form-check-label" for="form_checkbox">
                                                    <i class="fab la-whatsapp fs-2 text-success"></i>
                                                    WhatsApp
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Repeater-->
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
                                    <button type="submit" class="btn btn-primary" data-kt-stepper-action="submit">
                                        Actualizar
                                    </button>
                                    <button type="button" class="btn btn-primary" data-kt-stepper-action="next">
                                        Siguiente
                                    </button>
                                </div>
                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end::Form-->
                    </div>
                </div>
            </div>

            <div class="card mb-5 mb-xl-10">
                <!--begin::Card header-->
                <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                    data-bs-target="#kt_account_signin_method">
                    <div class="card-title m-0">
                        <h3 class="fw-bold m-0">Método de inicio de sesión</h3>
                    </div>
                </div>
                <!--end::Card header-->

                <!--begin::Content-->
                <div class="seccionMetodoInicio">
                    @component('usuarios.componentes.metodo-inicio')
                        @slot('usuario', $usuario)
                    @endcomponent
                </div>
                <!--end::Content-->
            </div>

            {{-- <div class="card mb-5 mb-xl-10">
                <!--begin::Card header-->
                <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                    data-bs-target="#kt_account_connected_accounts" aria-expanded="true"
                    aria-controls="kt_account_connected_accounts">
                    <div class="card-title m-0">
                        <h3 class="fw-bold m-0">Cuentas conectadas</h3>
                    </div>
                </div>
                <!--end::Card header-->

                <!--begin::Content-->
                <div id="kt_account_settings_connected_accounts" class="collapse show">
                    <!--begin::Card body-->
                    <div class="card-body border-top p-9">

                        <!--begin::Notice-->
                        <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
                            <!--begin::Icon-->
                            <i class="ki-duotone ki-design-1 fs-2tx text-primary me-4"></i> <!--end::Icon-->

                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack flex-grow-1 ">
                                <!--begin::Content-->
                                <div class=" fw-semibold">

                                    <div class="fs-6 text-gray-700 ">La autenticación de dos factores agrega una capa adicional de
                                        seguridad a su cuenta. Para iniciar sesión, deberá proporcionar un número increíble de 4 dígitos.
                                        código. <a href="#" class="fw-bold">Aprende más</a></div>
                                </div>
                                <!--end::Content-->

                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Notice-->

                        <!--begin::Items-->
                        <div class="py-2">
                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <div class="d-flex">
                                    <img src="{{asset('assets/media/svg/brand-logos/google-icon.svg')}}"
                                        class="w-30px me-6" alt="">

                                    <div class="d-flex flex-column">
                                        <a href="#" class="fs-5 text-gray-900 text-hover-primary fw-bold">Google</a>
                                        <div class="fs-6 fw-semibold text-gray-500">Planifica adecuadamente tu flujo de trabajo</div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <div class="form-check form-check-solid form-check-custom form-switch">
                                        <input class="form-check-input w-45px h-30px" type="checkbox" id="googleswitch">
                                        <label class="form-check-label" for="googleswitch"></label>
                                    </div>
                                </div>
                            </div>
                            <!--end::Item-->

                            <div class="separator separator-dashed my-5"></div>

                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <div class="d-flex">
                                    <img src="{{asset('assets/media/svg/brand-logos/github.svg')}}" class="w-30px me-6"
                                        alt="">

                                    <div class="d-flex flex-column">
                                        <a href="#" class="fs-5 text-gray-900 text-hover-primary fw-bold">Github</a>
                                        <div class="fs-6 fw-semibold text-gray-500">Vigila tus Repositorios</div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <div class="form-check form-check-solid form-check-custom form-switch">
                                        <input class="form-check-input w-45px h-30px" type="checkbox" id="githubswitch">
                                        <label class="form-check-label" for="githubswitch"></label>
                                    </div>
                                </div>
                            </div>
                            <!--end::Item-->

                            <div class="separator separator-dashed my-5"></div>

                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <div class="d-flex">
                                    <img src="{{asset('assets/media/svg/brand-logos/slack-icon.svg')}}"
                                        class="w-30px me-6" alt="">

                                    <div class="d-flex flex-column">
                                        <a href="#" class="fs-5 text-gray-900 text-hover-primary fw-bold">Slack</a>
                                        <div class="fs-6 fw-semibold text-gray-500">Integrar discusiones de proyectos</div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <div class="form-check form-check-solid form-check-custom form-switch">
                                        <input class="form-check-input w-45px h-30px" type="checkbox" id="slackswitch">
                                        <label class="form-check-label" for="slackswitch"></label>
                                    </div>
                                </div>
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Items-->
                    </div>
                    <!--end::Card body-->

                    <!--begin::Card footer-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        <button class="btn btn-light btn-active-light-primary me-2">Cancelar</button>
                        <button class="btn btn-primary">Actualizar</button>
                    </div>
                    <!--end::Card footer-->
                </div>
                <!--end::Content-->
            </div> --}}
        </div>
    </div>
@endsection

@section('modal')
    @if (!$usuario->google2fa_secret)
        @component('usuarios.modals.factor-dos-pasos')
            @slot('usuario', $usuario)
            @slot('qr', $qr)
            @slot('secret', $secret)
        @endcomponent
    @endif
@endsection

@section('scripts')
    <script src="{{ mix('/js/usuarios/editar.js') }}"></script>
    <script src="{{asset('assets/js/custom/modals/two-factor-authentication.js')}}"></script>
    <script src="{{asset('assets/js/custom/account/settings/signin-methods.js')}}"></script>
@endsection
