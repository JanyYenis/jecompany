<div class="flex-column current" data-kt-stepper-element="content">
    <input type="hidden" id="idMedico" name="id" value="{{$contacto->id}}">
    <div class="row">
        <div class="col-lg-6">
            <div class="fv-row mb-10">
                <label class="form-label required">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" value="{{$contacto->nombre}}" required />
            </div>
        </div>
        <div class="col-lg-6">
            <div class="fv-row mb-10">
                <label class="required form-label">Apellido</label>
                <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido" value="{{$contacto->apellido}}" required />
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="fv-row mb-10">
                <label class="required form-label">Tipo Identificación</label>
                <select name="tipo_identificacion" id="selectTipoIdentificacion"
                    class="form-control" data-control="select2" required
                    data-placeholder="Tipo Identificación" data-allow-clear="true"
                    data-dropdown-parent="#modalCrearContacto" data-hide-search="true">
                    <option></option>
                    <option value="1" {{$contacto->tipo_identificacion == 1 ? 'selected' : ''}}>CC - Cedula de Ciudadania</option>
                    <option value="2" {{$contacto->tipo_identificacion == 2 ? 'selected' : ''}}>NIT</option>
                    <option value="3" {{$contacto->tipo_identificacion == 3 ? 'selected' : ''}}>TI - Tarjeta de Identificación</option>
                </select>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="fv-row mb-10">
                <label class="required form-label">Identificación</label>
                <input type="text" class="form-control" name="identificacion" id="identificacion" placeholder="Identifcación" value="{{$contacto->identificacion}}" required />
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="fv-row mb-10">
                <label class="required form-label">Genero</label>
                <select name="genero" id="selectGenero"
                    class="form-control" data-control="select2" required
                    data-placeholder="Genero" data-allow-clear="true"
                    data-dropdown-parent="#modalCrearContacto" data-hide-search="true">
                    <option></option>
                    <option value="1" {{$contacto->genero == 1 ? 'selected' : ''}}>Masculino</option>
                    <option value="2" {{$contacto->genero == 2 ? 'selected' : ''}}>Femenino</option>
                </select>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="fv-row mb-10">
                <label class="required form-label">Etiqueta</label>
                <select name="etiquetas[]" id="selectEtiquitaEdit" multiple
                    class="form-control" data-control="select2" required
                    data-placeholder="Etiquita" data-allow-clear="true"
                    data-dropdown-parent="#modalCrearContacto">
                    <option></option>
                    @foreach ($etiquetas as $etiqueta)
                        <option value="{{ $etiqueta->id }}">
                            {{ $etiqueta->nombre }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
</div>

<div class="flex-column" data-kt-stepper-element="content">
    <label class="required form-label">Email</label>
    <div class="input-group mb-10">
        <span class="input-group-text" id="basic-addon1">@</span>
        <input type="text" class="form-control form-control" name="email" placeholder="Email" id="inputEmailEdit" value="{{$contacto->email}}" required />
    </div>
    <div class="fv-row mb-10">
        <label class="required form-label">Telefono</label>
        <input type="tel" name="telefono" id="telEdit" class="form-control" maxlength="15" value="{{'+'.$contacto->telefono}}" placeholder="Ingrese el teléfono" required data-default-country="co">
    </div>
</div>