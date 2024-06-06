<form id="formHojaVida1" enctype="multipart/form-data">
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
                    data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                    title="Cargar Foto">
                    <i class="las la-pencil-alt fs-3">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                    <input type="file" name="avatar" id="avatarUsuario" accept=".png, .jpg, .jpeg" />
                    <input type="hidden" name="avatar_remove" />
                </label>
                <!--end::Edit button-->

                <!--begin::Cancel button-->
                <span
                    class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip" data-bs-dismiss="click"
                    title="Cancel avatar">
                    <i class="las la-times fs-3"></i>
                </span>
                <!--end::Cancel button-->

                <!--begin::Remove button-->
                <span
                    class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                    data-kt-image-input-action="remove" data-bs-toggle="tooltip" data-bs-dismiss="click"
                    title="Remove avatar">
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
                <input type="text" class="form-control" name="nombre" value="{{ $usuario->nombre }}"
                    placeholder="Nombre" required />
            </div>
        </div>
        <div class="col-lg-6">
            <div class="fv-row mb-10">
                <label class="required form-label">Apellido</label>
                <input type="text" class="form-control" name="apellido" value="{{ $usuario->apellido }}"
                    placeholder="Apellido" required />
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="fv-row mb-10">
                <label class="required form-label">Tipo identificación</label>
                <select name="tipo_documento" id="selectTipoIdentificacion" data-control="select2"
                    data-placeholder="Seleccione el tipo de identificación" data-allow-clear="true"
                    data-hide-search="true" class="form-control" required>
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
                <input type="text" class="form-control" name="identificacion" value="{{ $usuario->identificacion }}"
                    placeholder="Identifcación" required />
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="fv-row mb-10">
                <label class="required form-label">Genero</label>
                <select name="genero" id="selectTipoIdentificacion" data-control="select2"
                    data-placeholder="Seleccione el tipo de identificación" data-allow-clear="true"
                    data-hide-search="true" class="form-control" required>
                    <option value=""></option>
                    @foreach ($generos as $item)
                        <option value="{{ $item->codigo }}" {{ $item?->codigo == $usuario?->genero ? 'selected' : '' }}>
                            {{ $item->nombre }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="fv-row mb-10">
                <label class="required form-label">Fecha nacimiento</label>
                <input class="form-control" placeholder="Fecha nacimiento" name="fecha" value="{{ $usuario->fecha }}"
                    id="kt_datepicker_1" required />
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="fv-row mb-10">
                <label class="required form-label">País</label>
                <select class="form-control" name="pais_id" placeholder="..." id="selectPais" required>
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
                <select name="id_ciudad" id="selectCiudad" data-ciudad="{{ $usuario?->id_ciudad }}" disabled
                    data-control="select2" data-placeholder="Seleccione una ciudad" data-allow-clear="true"
                    class="form-control" required>
                </select>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-success">Guardar</button>
    </div>
</form>

<div class="separator my-10"></div>


<div class="">
    <div class="">
        <h1 class="fs-1 required">Información Residencia:</h1>
    </div>
    <div class="text-end">
        <button type="button" class="btn btn-success">
            <i class="fas fa-plus fs-2 text-white"></i>
            Agregar
        </button>
    </div>
    <ol> 
        @if (count($direcciones))
            <div class="seccionInfoResidencial">
                @component('hoja_vida.pasos.infomacio-residencial')
                    @slot('direcciones', $direcciones)
                @endcomponent
            </div>
        @else
            <div class="text-start fs-1 text-dark">Sin Direcciones</div>
        @endif
    </ol>
</div>
