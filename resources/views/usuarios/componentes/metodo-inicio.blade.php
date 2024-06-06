<div id="kt_account_settings_signin_method" class="collapse show">
    <!--begin::Card body-->
    <div class="card-body border-top p-9">
        <!--begin::Email Address-->
        <div class="d-flex flex-wrap align-items-center">
            <!--begin::Label-->
            <div id="kt_signin_email">
                <div class="fs-6 fw-bold mb-1">Email</div>
                <div class="fw-semibold text-gray-600">{{ $usuario?->email ?? 'N/A' }}</div>
            </div>
            <!--end::Label-->

            <!--begin::Edit-->
            <div id="kt_signin_email_edit" class="flex-row-fluid d-none">
                <!--begin::Form-->
                <form id="kt_signin_change_email" class="form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">
                    <input type="hidden" name="id" value="{{$usuario->id}}">
                    <div class="row mb-6">
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <div class="fv-row mb-0 fv-plugins-icon-container">
                                <label for="emailaddress" class="form-label fs-6 fw-bold mb-3">Nuevo Email</label>
                                <input type="email" class="form-control form-control-lg form-control-solid" id="emailaddress" placeholder="Email Address" name="emailaddress" value="{{$usuario?->email ?? ''}}">
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="fv-row mb-0 fv-plugins-icon-container">
                                <label for="confirmemailpassword"
                                    class="form-label fs-6 fw-bold mb-3">Confimar Password</label>
                                <input type="password" class="form-control form-control-lg form-control-solid" name="confirmemailpassword" id="confirmemailpassword">
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex">
                        <button id="kt_signin_submit" type="button" class="btn btn-primary  me-2 px-6">Actualizar Email</button>
                        <button id="kt_signin_cancel" type="button" class="btn btn-color-gray-500 btn-active-light-primary px-6">Cancelar</button>
                    </div>
                </form>
                <!--end::Form-->
            </div>
            <!--end::Edit-->

            <!--begin::Action-->
            <div id="kt_signin_email_button" class="ms-auto">
                <button class="btn btn-light btn-active-light-primary">Cambiar Email</button>
            </div>
            <!--end::Action-->
        </div>
        <!--end::Email Address-->

        <!--begin::Separator-->
        <div class="separator separator-dashed my-6"></div>
        <!--end::Separator-->

        <!--begin::Password-->
        <div class="d-flex flex-wrap align-items-center mb-10">
            <!--begin::Label-->
            <div id="kt_signin_password">
                <div class="fs-6 fw-bold mb-1">Password</div>
                <div class="fw-semibold text-gray-600">************</div>
            </div>
            <!--end::Label-->

            <!--begin::Edit-->
            <div id="kt_signin_password_edit" class="flex-row-fluid d-none">
                <!--begin::Form-->
                <form id="kt_signin_change_password" class="form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">
                    <input type="hidden" name="id" value="{{$usuario->id}}">
                    <div class="row mb-1">
                        <div class="col-lg-4">
                            <div class="fv-row mb-0 fv-plugins-icon-container">
                                <label for="currentpassword" class="form-label fs-6 fw-bold mb-3">Actual Password</label>
                                <input type="password" class="form-control form-control-lg form-control-solid" name="currentpassword" id="currentpassword">
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="fv-row mb-0 fv-plugins-icon-container">
                                <label for="newpassword" class="form-label fs-6 fw-bold mb-3">Nuevo Password</label>
                                <input type="password" class="form-control form-control-lg form-control-solid" name="newpassword" id="newpassword">
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="fv-row mb-0 fv-plugins-icon-container">
                                <label for="confirmpassword" class="form-label fs-6 fw-bold mb-3">Confirmar
                                    Nuevo Password</label>
                                <input type="password" class="form-control form-control-lg form-control-solid" name="confirmpassword" id="confirmpassword">
                                <div
                                    class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-text mb-5">La contraseña debe tener al menos 8 caracteres y contener símbolos.</div>

                    <div class="d-flex">
                        <button id="kt_password_submit" type="button"
                            class="btn btn-primary me-2 px-6">Actualizar Password</button>
                        <button id="kt_password_cancel" type="button"
                            class="btn btn-color-gray-500 btn-active-light-primary px-6">Cancelar</button>
                    </div>
                </form>
                <!--end::Form-->
            </div>
            <!--end::Edit-->

            <!--begin::Action-->
            <div id="kt_signin_password_button" class="ms-auto">
                <button class="btn btn-light btn-active-light-primary">Cambiar Password</button>
            </div>
            <!--end::Action-->
        </div>
        <!--end::Password-->

        <!--begin::Notice-->
        <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed  p-6">
            <!--begin::Icon-->
            <i class="fas fa-shield-alt fs-2tx text-primary me-4">
                <span class="path1"></span>
                <span class="path2"></span>
            </i> <!--end::Icon-->

            <!--begin::Wrapper-->
            <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                <!--begin::Content-->
                <div class="mb-3 mb-md-0 fw-semibold">
                    <h4 class="text-gray-900 fw-bold">Asegure su cuenta</h4>
                    @if (!$usuario->google2fa_secret)
                        <div class="fs-6 text-gray-700 pe-7">La autenticación de dos factores agrega una capa adicional de seguridad a su cuenta. Para iniciar sesión, además deberás proporcionar un código de 6 dígitos</div>
                    @else
                        <div class="fs-6 text-gray-700 pe-7">¿Quieres inhabilitar la autenticación de dos factores? Presiona el botón de <strong>CANCELAR</strong></div>
                    @endif
                </div>
                <!--end::Content-->

                <!--begin::Action-->
                @if (!$usuario->google2fa_secret)
                    <a href="#" class="btn btn-primary px-6 align-self-center text-nowrap" data-bs-toggle="modal" data-bs-target="#kt_modal_two_factor_authentication">
                        Permitir
                    </a>
                @else
                    <a href="#" class="btn btn-primary px-6 align-self-center text-nowrap btnCancelarDosFactores">
                        Cancelar
                    </a>
                @endif
                <!--end::Action-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Notice-->
    </div>
    <!--end::Card body-->
</div>