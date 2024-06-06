@php
    $usuario = auth()->user();
    $cantidad = $usuario->unreadNotifications->count() ?? 0;
@endphp
<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="275px"
    data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_toggle">

    <!--begin::Logo-->
    <div class="d-flex flex-stack px-4 px-lg-6 py-6 py-lg-10" id="kt_app_sidebar_logo">
        <!--begin::Logo image-->
        <a href="{{route('home')}}">
            <img alt="Logo" src="{{ asset('assets/media/logos/logo-default.svg') }}" class="h-25px h-lg-30px">
        </a>
        <!--end::Logo image-->

        <!--begin::Filter-->
        <button class="btn btn-icon btn-color-white w-25px h-25px" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-overflow="true">
            <i class="fas fa-cog fs-1">
                <span class="path1"></span>
                <span class="path2"></span>
                <span class="path3"></span>
                <span class="path4"></span>
                <span class="path5"></span>
            </i>
        </button>
        <!--begin::Menu 1-->
        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_662082156a0a4">
            <!--begin::Header-->
            <div class="px-7 py-5">
                <div class="fs-5 text-gray-900 fw-bold">Opciones de Filtros</div>
            </div>
            <!--end::Header-->

            <!--begin::Menu separator-->
            <div class="separator border-gray-200"></div>
            <!--end::Menu separator-->


            <!--begin::Form-->
            <div class="px-7 py-5">
                <!--begin::Input group-->
                <div class="mb-10">
                    <!--begin::Label-->
                    <label class="form-label fw-semibold">Estados:</label>
                    <!--end::Label-->

                    <!--begin::Input-->
                    <div>
                        <select class="form-select form-select-solid select2-hidden-accessible" multiple=""
                            data-kt-select2="true" data-close-on-select="false" data-placeholder="Seleccione la opcion"
                            data-dropdown-parent="#kt_menu_662082156a0a4" data-allow-clear="true"
                            data-select2-id="select2-data-7-z9tq" tabindex="-1" aria-hidden="true"
                            data-kt-initialized="1">
                            <option></option>
                            <option value="1">Aprobado</option>
                            <option value="2">Pendiente</option>
                            <option value="3">En proceso</option>
                            <option value="4">Rechazado</option>
                        </select>
                        <span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-8-5ogz" style="width: 100%;">
                            <span class="selection">
                                <span class="select2-selection select2-selection--multiple form-select form-select-solid"
                                    role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false">
                                    <ul class="select2-selection__rendered" id="select2-e3mz-container"></ul>
                                    <span class="select2-search select2-search--inline">
                                        <textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none"
                                            spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search"
                                            aria-describedby="select2-e3mz-container" placeholder="Select option" style="width: 100%;"></textarea>
                                    </span>
                                </span>
                            </span>
                            <span class="dropdown-wrapper" aria-hidden="true"></span>
                        </span>
                    </div>
                    <!--end::Input-->
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="mb-10">
                    <!--begin::Label-->
                    <label class="form-label fw-semibold">Tipo de miembros:</label>
                    <!--end::Label-->

                    <!--begin::Options-->
                    <div class="d-flex">
                        <!--begin::Options-->
                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                            <input class="form-check-input" type="checkbox" value="1">
                            <span class="form-check-label">
                                Autor
                            </span>
                        </label>
                        <!--end::Options-->

                        <!--begin::Options-->
                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="2" checked="checked">
                            <span class="form-check-label">
                                Cliente
                            </span>
                        </label>
                        <!--end::Options-->
                    </div>
                    <!--end::Options-->
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="mb-10">
                    <!--begin::Label-->
                    <label class="form-label fw-semibold">Notificaciones:</label>
                    <!--end::Label-->

                    <!--begin::Switch-->
                    <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="" name="notifications" checked>
                        <label class="form-check-label">
                            Activado
                        </label>
                    </div>
                    <!--end::Switch-->
                </div>
                <!--end::Input group-->

                <!--begin::Actions-->
                <div class="d-flex justify-content-end">
                    <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Restablecer</button>
                    <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Aplicar</button>
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Form-->
        </div>
        <!--end::Menu 1--> <!--end::Filter-->
    </div>
    <!--end::Logo-->

    <!--begin::Sidebar nav-->
    <div class="flex-column-fluid px-4 px-lg-8 py-4 py-lg-8" id="kt_app_sidebar_nav">
        <!--begin::Nav wrapper-->
        <div id="kt_app_sidebar_nav_wrapper" class="d-flex flex-column hover-scroll-y pe-4 me-n4"
            data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto"
            data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
            data-kt-scroll-wrappers="#kt_app_sidebar, #kt_app_sidebar_nav" data-kt-scroll-offset="5px" style="height: 376px;">
            <!--begin::Stats-->
            <div class="d-flex mb-8 mb-lg-20">
                <!--begin::Stat-->
                <div class="button button-custom rounded min-w-100px w-100 py-2 px-4 me-6">
                    <!--begin::Date-->
                    <span class="fs-6 text-gray-600 fw-semibold">Usuarios Activos</span>
                    <!--end::Date-->

                    <!--begin::Label-->
                    <div class="fs-2 fw-bold text-success" id="totalUsuariosActivos">0</div>
                    <!--end::Label-->
                </div>
                <!--end::Stat-->
                <!--begin::Stat-->
                <div class="button button-custom rounded min-w-100px w-100 py-2 px-4 ">
                    <!--begin::Date-->
                    <span class="fs-6 text-gray-600 fw-semibold">Usuarios Inactivos</span>
                    <!--end::Date-->

                    <!--begin::Label-->
                    <div class="fs-2 fw-bold text-danger">0</div>
                    <!--end::Label-->
                </div>
                <!--end::Stat-->

            </div>
            <!--end::Stats-->

            <!--begin::Links-->
            <div class="app-sidebar-nav mb-4" id="kt_app_sidebar_nav">
                <!--begin::Row-->
                <div class="links row row-cols-3" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button]"
                    data-kt-initialized="1">
                    <!--begin::Col-->
                    <div class="col mb-4">
                        <!--begin::Link-->
                        <a href="{{ route('home') }}" class="btn btn-custom btn-outline btn-icon  btn-flex flex-column flex-center w-lg-90px h-lg-90px w-70px h-70px border-0" data-kt-button="true">
                            <!--begin::Icon-->
                            <span class="mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M21.4622 10.699C21.4618 10.6986 21.4613 10.6981 21.4609 10.6977L13.3016 2.53955C12.9538 2.19165 12.4914 2 11.9996 2C11.5078 2 11.0454 2.1915 10.6974 2.5394L2.54246 10.6934C2.53971 10.6961 2.53696 10.699 2.53422 10.7018C1.82003 11.42 1.82125 12.5853 2.53773 13.3017C2.86506 13.6292 3.29739 13.8188 3.75962 13.8387C3.77839 13.8405 3.79732 13.8414 3.81639 13.8414H4.14159V19.8453C4.14159 21.0334 5.10833 22 6.29681 22H9.48897C9.81249 22 10.075 21.7377 10.075 21.4141V16.707C10.075 16.1649 10.516 15.7239 11.0582 15.7239H12.941C13.4832 15.7239 13.9242 16.1649 13.9242 16.707V21.4141C13.9242 21.7377 14.1866 22 14.5102 22H17.7024C18.8909 22 19.8576 21.0334 19.8576 19.8453V13.8414H20.1592C20.6508 13.8414 21.1132 13.6499 21.4613 13.302C22.1786 12.5844 22.1789 11.4171 21.4622 10.699V10.699Z" fill="#00B2FF" />
                                </svg>
                            </span>
                            <!--end::Icon-->

                            <!--begin::Label-->
                            <span class="fs-7 fw-bold">Dashboard</span>
                            <!--end::Label-->
                        </a>
                        <!--end::Link-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    @canAny('usuarios.listado', 'usuarios.crear', 'usuarios.editar', 'usuarios.eliminar')
                        <div class="col mb-4">
                            <!--begin::Link-->
                            <a href="{{ route('usuarios.index') }}" class="btn btn-custom btn-outline btn-icon  btn-flex flex-column flex-center w-lg-90px h-lg-90px w-70px h-70px border-0"
                                data-kt-button="true">
                                <!--begin::Icon-->
                                <span class="mb-2">
                                    <i class="fas fa-user fs-2qx">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                    </i>
                                </span>
                                <!--end::Icon-->

                                <!--begin::Label-->
                                <span class="fs-7 fw-bold">Listado Usuarios</span>
                                <!--end::Label-->
                            </a>
                            <!--end::Link-->
                        </div>
                    @endcanany
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col mb-4">
                        <!--begin::Link-->
                        <a href="{{ route('hoja-de-vida.index') }}" class="btn btn-custom btn-outline btn-icon  btn-flex flex-column flex-center w-lg-90px h-lg-90px w-70px h-70px border-0" data-kt-button="true">
                            <!--begin::Icon-->
                            <span class="mb-2">
                                <i class="ki-duotone ki-note-2 fs-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                </i>
                            </span>
                            <!--end::Icon-->

                            <!--begin::Label-->
                            <span class="fs-7 fw-bold">Hoja de vida</span>
                            <!--end::Label-->
                        </a>
                        <!--end::Link-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col mb-4">
                        <!--begin::Link-->
                        <a href="{{ route('calendario.index') }}"
                            class="btn btn-custom btn-outline btn-icon  btn-flex flex-column flex-center w-lg-90px h-lg-90px w-70px h-70px border-0"
                            data-kt-button="true">
                            <!--begin::Icon-->
                            <span class="mb-2">
                                <i class="far fa-calendar-alt fs-2qx">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                    <span class="path5"></span>
                                    <span class="path6"></span>
                                </i>
                            </span>
                            <!--end::Icon-->

                            <!--begin::Label-->
                            <span class="fs-7 fw-bold">Calendario</span>
                            <!--end::Label-->
                        </a>
                        <!--end::Link-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col mb-4">
                        <!--begin::Link-->
                        <a href="{{ route('tareas.index') }}" class="btn btn-custom btn-outline btn-icon  btn-flex flex-column flex-center w-lg-90px h-lg-90px w-70px h-70px border-0" data-kt-button="true">
                            <!--begin::Icon-->
                            <span class="mb-2">
                                <i class="fas fa-clipboard-list fs-2qx">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </span>
                            <!--end::Icon-->

                            <!--begin::Label-->
                            <span class="fs-7 fw-bold">Tareas</span>
                            <!--end::Label-->
                        </a>
                        <!--end::Link-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col mb-4">
                        <!--begin::Link-->
                        <a href="{{ route('whatsapp.contactos.index') }}"
                            class="btn btn-custom btn-outline btn-icon  btn-flex flex-column flex-center w-lg-90px h-lg-90px w-70px h-70px border-0"
                            data-kt-button="true">
                            <!--begin::Icon-->
                            <span class="mb-2">
                                <i class="fab fa-whatsapp fs-2qx">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                </i>
                            </span>
                            <!--end::Icon-->

                            <!--begin::Label-->
                            <span class="fs-7 fw-bold">WhatsApp</span>
                            <!--end::Label-->
                        </a>
                        <!--end::Link-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col mb-4">
                        <!--begin::Link-->
                        <a href="{{ route('qr.index') }}" class="btn btn-custom btn-outline btn-icon  btn-flex flex-column flex-center w-lg-90px h-lg-90px w-70px h-70px border-0" data-kt-button="true">
                            <!--begin::Icon-->
                            <span class="mb-2">
                                <i class="la la-qrcode fs-2hx">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </span>
                            <!--end::Icon-->

                            <!--begin::Label-->
                            <span class="fs-7 fw-bold">QR</span>
                            <!--end::Label-->
                        </a>
                        <!--end::Link-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col mb-4">
                        <!--begin::Link-->
                        <a href="#"
                            class="btn btn-custom btn-outline btn-icon  btn-flex flex-column flex-center w-lg-90px h-lg-90px w-70px h-70px border-0"
                            data-kt-button="true">
                            <!--begin::Icon-->
                            <span class="mb-2">
                                <i class="fas fa-cogs fs-2qx">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                    <span class="path5"></span>
                                </i>
                            </span>
                            <!--end::Icon-->

                            <!--begin::Label-->
                            <span class="fs-7 fw-bold">Configuaraciones</span>
                            <!--end::Label-->
                        </a>
                        <!--end::Link-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col mb-4">
                        <!--begin::Link-->
                        <a href="#"
                            class="btn btn-custom btn-outline btn-icon  btn-flex flex-column flex-center w-lg-90px h-lg-90px w-70px h-70px active border-primary border-dashed"
                            data-kt-button="true">
                            <!--begin::Icon-->
                            <span class="mb-2">
                                <i class="ki-duotone ki-plus fs-1"></i>
                            </span>
                            <!--end::Icon-->

                            <!--begin::Label-->
                            <span class="fs-7 fw-bold">Agregar</span>
                            <!--end::Label-->
                        </a>
                        <!--end::Link-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
            </div>
            <!--end::Links-->
        </div>
        <!--end::Nav wrapper-->
    </div>
    <!--end::Sidebar nav-->
    <!--begin::Footer-->
    <div class="app-sidebar-footer d-flex flex-center px-4 py-4 py-lg-8" id="kt_app_sidebar_footer">
        <!--begin::User-->
        <div class="user-toolbar d-flex align-items-center rounded px-5 py-3 mb-2">
            <!--begin::User-->
            <div class="cursor-pointer symbol me-3 ms-n2">
                <img class="" src="{{ $usuario?->foto ? asset($usuario?->foto) : asset('assets/media/avatars/150-2.jpg')}}" alt="Usuario">
            </div>
            <!--end::User-->

            <!--begin:Info-->
            <div class="d-flex flex-column align-items-start flex-grow-1">
                <a href="#" class="user-toolbar-title fs-6 fw-bold">{{$usuario->nombre}}</a>
                <a href="#" class="user-toolbar-desc fs-7 fw-semibold d-block">React Developer</a>
            </div>
            <!--end:Info-->

            <!--begin::User menu-->
            <div>
                <button class="btn btn-icon btn-custom me-n2" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                    data-kt-menu-overflow="true" data-kt-menu-attach="parent" data-kt-menu-placement="top-start">
                    <i class="fas fa-ellipsis-v fs-2 me-n5">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                        <span class="path4"></span>
                    </i>
                </button>


                <!--begin::User account menu-->
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                    data-kt-menu="true">
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <div class="menu-content d-flex align-items-center px-3">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-50px me-5">
                                <img alt="Logo" src="{{ $usuario?->foto ? asset($usuario?->foto) : asset('assets/media/avatars/150-2.jpg')}}">
                            </div>
                            <!--end::Avatar-->

                            <!--begin::Username-->
                            <div class="d-flex flex-column">
                                <div class="fw-bold d-flex align-items-center fs-5">
                                    {{$usuario->nombre}}
                                    <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span>
                                </div>

                                <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">React Developer </a>
                            </div>
                            <!--end::Username-->
                        </div>
                    </div>
                    <!--end::Menu item-->

                    <!--begin::Menu separator-->
                    <div class="separator my-2"></div>
                    <!--end::Menu separator-->

                    <!--begin::Menu item-->
                    <div class="menu-item px-5">
                        <a href="{{ route('usuarios.edit', auth()->user()->id) }}" class="menu-link px-5">
                            Mi Perfil
                        </a>
                    </div>
                    <!--end::Menu item-->

                    <!--begin::Menu item-->
                    <div class="menu-item px-5">
                        <a href="{{ route('proyectos.index') }}" class="menu-link px-5">
                            <span class="menu-text">Mis Proyectos</span>
                            <span class="menu-badge">
                                <span class="badge badge-light-danger badge-circle fw-bold fs-7">3</span>
                            </span>
                        </a>
                    </div>
                    <!--end::Menu item-->

                    <!--begin::Menu item-->
                    <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                        data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                        <a href="#" class="menu-link px-5">
                            <span class="menu-title">My Subscription</span>
                            <span class="menu-arrow"></span>
                        </a>

                        <!--begin::Menu sub-->
                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="/#" class="menu-link px-5">
                                    Referrals
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-5">
                                    Billing
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-5">
                                    Payments
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link d-flex flex-stack px-5">
                                    Statements
                                    <span class="ms-2 lh-0" data-bs-toggle="tooltip" aria-label="View your statements" data-bs-original-title="View your statements" data-kt-initialized="1">
                                        <i class="ki-duotone ki-information-5 fs-5">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </span>
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu separator-->
                            <div class="separator my-2"></div>
                            <!--end::Menu separator-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <div class="menu-content px-3">
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications">
                                        <span class="form-check-label text-muted fs-7">
                                            Notificaciones
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu sub-->
                    </div>
                    <!--end::Menu item-->

                    <!--begin::Menu item-->
                    <div class="menu-item px-5">
                        <a href="#" class="menu-link px-5">
                            My Statements
                        </a>
                    </div>
                    <!--end::Menu item-->

                    <!--begin::Menu separator-->
                    <div class="separator my-2"></div>
                    <!--end::Menu separator-->

                    <!--begin::Menu item-->
                    <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                        data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                        <a href="#" class="menu-link px-5">
                            <span class="menu-title position-relative">
                                Tema
                                <span class="ms-5 position-absolute translate-middle-y top-50 end-0">
                                    <i class="ki-duotone ki-night-day theme-light-show fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                        <span class="path6"></span>
                                        <span class="path7"></span>
                                        <span class="path8"></span>
                                        <span class="path9"></span>
                                        <span class="path10"></span>
                                    </i>
                                    <i class="ki-duotone ki-moon theme-dark-show fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                            </span>
                        </a>

                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                            data-kt-menu="true" data-kt-element="theme-mode-menu">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3 my-0">
                                <a href="#" class="menu-link px-3 py-2 active" data-kt-element="mode" data-kt-value="light">
                                    <span class="menu-icon" data-kt-element="icon">
                                        <i class="ki-duotone ki-night-day fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                            <span class="path5"></span>
                                            <span class="path6"></span>
                                            <span class="path7"></span>
                                            <span class="path8"></span>
                                            <span class="path9"></span>
                                            <span class="path10"></span>
                                        </i>
                                    </span>
                                    <span class="menu-title">
                                        Light
                                    </span>
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3 my-0">
                                <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
                                    <span class="menu-icon" data-kt-element="icon">
                                        <i class="ki-duotone ki-moon fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </span>
                                    <span class="menu-title">
                                        Dark
                                    </span>
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3 my-0">
                                <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
                                    <span class="menu-icon" data-kt-element="icon">
                                        <i class="ki-duotone ki-screen fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                        </i>
                                    </span>
                                    <span class="menu-title">
                                        System
                                    </span>
                                </a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->

                    </div>
                    <!--end::Menu item-->

                    <!--begin::Menu item-->
                    <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                        data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                        <a href="#" class="menu-link px-5">
                            <span class="menu-title position-relative">
                                Idioma
                                <span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">
                                    Español <img class="w-15px h-15px rounded-1 ms-2" src="{{asset('assets/media/flags/spain.svg')}}" alt="">
                                </span>
                            </span>
                        </a>

                        <!--begin::Menu sub-->
                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link d-flex px-5">
                                    <span class="symbol symbol-20px me-4">
                                        <img class="rounded-1"
                                            src="{{asset('assets/media/flags/united-states.svg')}}" alt="">
                                    </span>
                                    Ingles
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link d-flex px-5 active">
                                    <span class="symbol symbol-20px me-4">
                                        <img class="rounded-1" src="{{asset('assets/media/flags/spain.svg')}}" alt="">
                                    </span>
                                    Español
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link d-flex px-5">
                                    <span class="symbol symbol-20px me-4">
                                        <img class="rounded-1" src="{{asset('assets/media/flags/germany.svg')}}" alt="">
                                    </span>
                                    Aleman
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link d-flex px-5">
                                    <span class="symbol symbol-20px me-4">
                                        <img class="rounded-1" src="{{asset('assets/media/flags/japan.svg')}}" alt="">
                                    </span>
                                    Japones
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link d-flex px-5">
                                    <span class="symbol symbol-20px me-4">
                                        <img class="rounded-1" src="{{asset('assets/media/flags/france.svg')}}" alt="">
                                    </span>
                                    Frances
                                </a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu sub-->
                    </div>
                    <!--end::Menu item-->

                    <!--begin::Menu item-->
                    <div class="menu-item px-5 my-1">
                        <a href="#" class="menu-link px-5">
                            Configurar cuenta
                        </a>
                    </div>
                    <!--end::Menu item-->

                    <!--begin::Menu item-->
                    <div class="menu-item px-5">
                        <a href="{{ route('logout') }}" class="menu-link px-5" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Salir
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </a>
                    </div>
                    <!--end::Menu item-->
                </div>
                <!--end::User account menu-->
            </div>
            <!--end::User menu-->
        </div>
        <!--end::User-->
    </div>
    <!--end::Footer-->
</div>
