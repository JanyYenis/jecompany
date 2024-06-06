<div class="modal fade" tabindex="-1" id="modalCrearContacto">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn btn-icon btn-active-light-primary position-relative w-30px h-30px w-md-40px h-md-40px"
                    id="btnTutorialCrear">
                    <span class="svg-icon svg-icon-1">
                        <i class="fas fa-info-circle fs-1"></i>
                    </span>
                </div>
                <h5 class="modal-title text-verdoso" style="font-size: 30px;">Crear Contacto</h5>
                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2 btnCerrarModal" data-bs-dismiss="modal"
                    aria-label="Close">
                    <span class="svg-icon svg-icon-2x">
                        <i class="las la-times fs-1"></i>
                    </span>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
                <div class="stepper stepper-pills" id="kt_stepper_example_clickable">
                    <div class="stepper-nav flex-center flex-wrap mb-10" id="tutorialPasos">
                        <!--begin::Step 1-->
                        <div class="stepper-item mx-8 my-4 current" id="tutorialPaso1" data-kt-stepper-element="nav"
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
                    <form class="form w-lg-500px mx-auto" id="formCrearContacto">
                        <div id="errores">
                            @component('sistema/div-errores')
                            @endcomponent
                        </div>
                        <div class="mb-5">
                            <!--begin::Step 1-->
                            <div class="flex-column current" data-kt-stepper-element="content">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="fv-row mb-10">
                                            <label class="form-label required">Nombre</label>
                                            <input type="text" class="form-control" name="nombre"
                                                placeholder="Nombre" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="fv-row mb-10">
                                            <label class="required form-label">Apellido</label>
                                            <input type="text" class="form-control" name="apellido"
                                                placeholder="Apellido" required />
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
                                                <option value="1">CC - Cedula de Ciudadania</option>
                                                <option value="2">NIT</option>
                                                <option value="3">TI - Tarjeta de Identificación</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="fv-row mb-10">
                                            <label class="required form-label">Identificación</label>
                                            <input type="number" class="form-control" name="identificacion"
                                                placeholder="Identifcación" required />
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
                                                <option value="1">Masculino</option>
                                                <option value="2">Femenino</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="fv-row mb-10">
                                            <label class="required form-label">Etiqueta</label>
                                            <select name="etiquetas[]" id="selectEtiquita" multiple
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
                            <!--begin::Step 1-->

                            <!--begin::Step 2-->
                            <div class="flex-column" data-kt-stepper-element="content">
                                <label class="required form-label">Email</label>
                                <div class="input-group mb-10">
                                    <span class="input-group-text" id="basic-addon1">@</span>
                                    <input type="text" class="form-control form-control" name="email"
                                        placeholder="Email" id="inputEmail" required />
                                </div>
                                <div class="fv-row mb-10">
                                    <label class="required form-label">Telefono</label>
                                    <input type="tel" name="telefono" id="tel" class="form-control" maxlength="15"
                                        placeholder="Ingrese el teléfono" required data-default-country="co">
                                </div>
                            </div>
                            <!--begin::Step 2-->
                            <!--begin::Actions-->
                            <div class="d-flex flex-stack">
                                <div class="me-2">
                                    <button type="button" class="btn btn-light"
                                        data-kt-stepper-action="previous">
                                        Atras
                                    </button>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary"
                                        data-kt-stepper-action="submit">
                                        Crear
                                    </button>
                                    <button type="button" class="btn btn-primary"
                                        data-kt-stepper-action="next">
                                        Siguiente
                                    </button>
                                </div>
                            </div>
                            <!--end::Actions-->
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Stepper-->
            </div>
        </div>
    </div>
</div>