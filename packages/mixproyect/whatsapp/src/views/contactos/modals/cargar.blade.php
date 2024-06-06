
<div class="modal fade" tabindex="-1" id="modalCargarMedicos">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-verdoso" style="font-size: 30px;">Cargar Medicos</h5>
                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2 btnCerrarModal" data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-2x">
                        <i class="las la-times fs-1"></i>
                    </span>
                </div>
                <!--end::Close-->
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
                        <span>Los archivos CSV deben estar separados por medio de comas (,), si desea tener un ejemplo de la estructura de los archivos puede descargarlos dando clic en el tipo de archivo que aparece a continuación:</span>
                        <div class="container py-4">
                            <a href="{{ asset('estructuras/farma-d/estructura-medicos.csv') }}" class="btn btn-success hover-scale">
                                <i class="fas fa-file-csv"></i>
                                CSV
                            </a>
                            <a href="{{ asset('estructuras/farma-d/estructura-medicos.xlsx') }}" class="btn btn-success hover-scale">
                                <i class="fas fa-file-excel"></i>
                                Excel
                            </a>
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
                <div class="form-check py-3">
                    <input class="form-check-input" type="checkbox" value="1" name="encabezado" id="flexCheckDefault" checked disabled/>
                    <label class="form-label" for="flexCheckDefault">
                        Eliminar encabezado
                    </label>
                </div>
                <form id="kt_dropzonejs_example_1" enctype="multipart/form-data" class="dropzone">
                    <div class="fv-row">
                        <div class="dz-message needsclick">
                            <i class="las la-cloud-upload-alt fs-3x text-primary">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                            <div class="ms-4">
                                <h3 class="fs-5 fw-bold text-gray-900 mb-1">Cargar Archivo CSV o Excel</h3>
                                <span class="fs-7 fw-semibold text-gray-400">Maximo 1 Archivos</span>
                            </div>
                        </div><br>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btnG btnG-light obalado text-white" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btnG btnG-primary obalado guardar" id="enviarButton">Cargar</button>
            </div>
        </div>
    </div>
</div>