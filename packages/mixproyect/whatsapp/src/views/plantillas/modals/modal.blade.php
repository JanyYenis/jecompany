<div class="modal fade" tabindex="-1" id="modalEditarPlantilla">
    <form id="formEditarPlantilla" enctype="multipart/form-data">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title d-flex justify-content-center text-verdoso mulish">Editar Plantilla</h5>
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2 btnCerrarModal" data-bs-dismiss="modal" aria-label="Close">
                        <span class="svg-icon svg-icon-2x">
                        <i class="las la-times fs-1"></i>
                    </span>
                    </div>
                </div>
    
                <div class="modal-body">
                    <!--begin::Alert-->
                    <div class="alert alert-dismissible bg-light-primary border border-primary d-flex flex-column flex-sm-row p-5 mb-10">
                        <i class="fas fa-exclamation fs-2hx text-primary me-4 mb-5 mb-sm-0">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                        </i>
                        <div class="d-flex flex-column pe-0 pe-sm-10">
                            <h5 class="mb-1">Información importante</h5>
                            <span>Para editar plantillas para reutilizar o donde se envien el nombre del medico debe agregarse las variables. Para agregar una varibale debe escribir {{1}}, y si desea agregar otra debe escribir {{2}} y asi segun la cantidad de variables que necesite.</span>
                        </div>
                        <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
                            <i class="las la-times fs-1 text-primary">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </button>
                    </div>
                    <!--end::Alert-->
                    <div class="seccionEditar"></div>
                </div>
    
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Crear</button>
                </div>
            </div>
        </div>
    </form>
</div>