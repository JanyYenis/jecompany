<div class="modal fade" tabindex="-1" id="modalEditarMedicos">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title offset-lg-4 text-verdoso" style="font-size: 30px;">Editar Contacto</h5>
                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2 btnCerrarModal" data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-2x">
                        <i class="las la-times fs-1"></i>
                    </span>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
                <div class="stepper stepper-pills" id="kt_stepper_example_clickable_edit">
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
                    <form class="form w-lg-550px mx-auto" id="formEditarContacto">
                        <div id="errores">
                            @component('sistema/div-errores')
                            @endcomponent
                        </div>
                        <div class="mb-5">
                            <div id="seccionEditar"></div>
                        </div>

                        <!--begin::Actions-->
                        <div class="d-flex flex-stack">
                            <div class="me-2">
                                <button type="button" class="btn btn-light" data-kt-stepper-action="previous">
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
                </div>
                <!--end::Stepper-->
            </div>
        </div>
    </div>
</div>