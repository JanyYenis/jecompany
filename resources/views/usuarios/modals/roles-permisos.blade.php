<div class="modal fade" tabindex="-1" id="modalRolesPermisos">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title">
                    <i class="fas fa-user-lock text-success fs-2tx"></i>
                    Roles y Permisos
                </h1>
                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="las la-times fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
                <input type="hidden" name="id" id="idUsuario">
                <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x mb-5 fs-6">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#tabRoles">Roles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tabPermisos">Permisos</a>
                    </li>
                </ul>
                
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="tabRoles" role="tabpanel">
                        <div class="mt-4 mb-4">
                            <!--begin::Alert-->
                            <div class="alert alert-dismissible bg-light-primary border border-primary d-flex flex-column flex-sm-row p-5 mb-10">
                                <i class="fas fa-exclamation fs-2hx text-primary me-4 mb-5 mb-sm-0">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                                <div class="d-flex flex-column pe-0 pe-sm-10">
                                    <h5 class="mb-1">Información Importante</h5>
                                    <span>Podra encontar el listado de los roles, al lado izquierdo los roles que se encuentran disponibles y en el lado derecho los roles que el usuario tiene asignados.</span>
                                </div>
                                <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
                                    <i class="las la-times text-primary fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </button>
                            </div>
                            <!--end::Alert-->
                        </div>
                        <form id="formRoles">
                            <div class="container">
                                <select multiple="multiple" id="selectRoles" name="roles">
                                </select>
                            </div>
                            <div class="mt-5 d-flex justify-content-center">
                                <button type="submit" class="btn btn-success">Guardar</button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="tabPermisos" role="tabpanel">
                        <div class="mt-4 mb-4">
                            <!--begin::Alert-->
                            <div class="alert alert-dismissible bg-light-primary border border-primary d-flex flex-column flex-sm-row p-5 mb-10">
                                <i class="fas fa-exclamation fs-2hx text-primary me-4 mb-5 mb-sm-0">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                                <div class="d-flex flex-column pe-0 pe-sm-10">
                                    <h5 class="mb-1">Información Importante</h5>
                                    <span>Podra encontar el listado de los permisos, al lado izquierdo los permisos que se encuentran disponibles y en el lado derecho los permisos que el usuario tiene asignados.</span>
                                </div>
                                <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
                                    <i class="las la-times text-primary fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </button>
                            </div>
                            <!--end::Alert-->
                        </div>
                        <form id="formPermisos">
                            <div class="container">
                                <select multiple="multiple" id="selectPermisos" name="permisos">
                                </select>
                            </div>
                            <div class="mt-5 d-flex justify-content-center">
                                <button type="submit" class="btn btn-success">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
                {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
            </div>
        </div>
    </div>
</div>