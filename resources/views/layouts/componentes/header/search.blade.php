<div id="kt_header_search" class="header-search d-flex align-items-stretch" data-kt-search-keypress="true"
    data-kt-search-min-length="2" data-kt-search-enter="true" data-kt-search-layout="menu" data-kt-menu-trigger="auto"
    data-kt-menu-overflow="false" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-start">

    <!--begin::Search toggle-->
    <div class="d-flex align-items-center" data-kt-search-element="toggle" id="kt_header_search_toggle">
        <div class="btn btn-icon btn-circle btn-color-primary btn-active-color-primary btn-custom shadow-sm bg-body">
            <i class="fas fa-search fs-1">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>
        </div>
    </div>
    <!--end::Search toggle-->

    <!--begin::Menu-->
    <div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown p-7 w-325px w-md-375px">
        <div data-kt-search-element="wrapper">
            <form data-kt-search-element="form" class="w-100 position-relative mb-3" autocomplete="off">
                <i class="fas fa-search fs-2 text-gray-500 position-absolute top-50 translate-middle-y ms-0">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>

                <input type="text" class="search-input  form-control form-control-flush ps-10" id="inputSearchGeneral" name="search"
                    value="" placeholder="Buscar..." data-kt-search-element="input">

                <!--begin::Spinner-->
                <span class="search-spinner  position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-1" data-kt-search-element="spinner">
                    <span class="spinner-border h-15px w-15px align-middle text-gray-500"></span>
                </span>
                <!--end::Spinner-->

                <!--begin::Reset-->
                <span class="search-reset  btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none" data-kt-search-element="clear">
                    <i class="fas fa-cog fs-2 fs-lg-1 me-0">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </span>
                <!--end::Reset-->

                <!--begin::Toolbar-->
                <div class="position-absolute top-50 end-0 translate-middle-y" data-kt-search-element="toolbar">
                    <!--begin::Preferences toggle-->
                    <div data-kt-search-element="preferences-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary me-1" data-bs-toggle="tooltip"
                        aria-label="Mostrar preferencias de busqueda" data-bs-original-title="Mostrar preferencias de busqueda">
                        <i class="fas fa-cog fs-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <!--end::Preferences toggle-->

                    <!--begin::Advanced search toggle-->
                    <div data-kt-search-element="advanced-options-form-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary" data-bs-toggle="tooltip"
                        aria-label="Mostrar opciones de busqueda" data-bs-original-title="Mostrar opciones de busqueda">
                        <i class="fas fa-chevron-down fs-2"></i>
                    </div>
                    <!--end::Advanced search toggle-->
                </div>
                <!--end::Toolbar-->
            </form>
            <!--end::Form-->

            <!--begin::Search results-->
            <div data-kt-search-element="results" class="d-none">
                <!--begin::Items-->
                <div class="seccionResultadoSearch">
                    @component('layouts.componentes.header.componentes-search.resultado')
                    @endcomponent
                </div>
                <!--end::Items-->
            </div>
            <!--end::Search results-->

            <!--begin::Main content element-->
            <div class="mb-5" data-kt-search-element="main">
                <!--begin::Heading-->
                <div class="d-flex flex-stack fw-semibold mb-4">
                    <!--begin::Label-->
                    <span class="text-muted fs-6 me-2">Busquedas recientes:</span>
                    <!--end::Label-->
                </div>
                <!--end::Heading-->

                <!--begin::Items-->
                <div class="scroll-y mh-200px mh-lg-325px">
                    <!--begin::Item-->
                    <div class="d-flex align-items-center mb-5">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">
                                <i class="ki-duotone ki-laptop fs-2 text-primary"><span class="path1"></span><span
                                        class="path2"></span></i>
                            </span>
                        </div>
                        <!--end::Symbol-->

                        <!--begin::Title-->
                        <div class="d-flex flex-column">
                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">BoomApp
                                by Keenthemes</a>
                            <span class="fs-7 text-muted fw-semibold">#45789</span>
                        </div>
                        <!--end::Title-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-center mb-5">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">
                                <i class="ki-duotone ki-chart-simple fs-2 text-primary"><span
                                        class="path1"></span><span class="path2"></span><span
                                        class="path3"></span><span class="path4"></span></i>
                            </span>
                        </div>
                        <!--end::Symbol-->

                        <!--begin::Title-->
                        <div class="d-flex flex-column">
                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Kept
                                API Project Meeting</a>
                            <span class="fs-7 text-muted fw-semibold">#84050</span>
                        </div>
                        <!--end::Title-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-center mb-5">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">
                                <i class="ki-duotone ki-chart fs-2 text-primary"><span class="path1"></span><span
                                        class="path2"></span></i>
                            </span>
                        </div>
                        <!--end::Symbol-->

                        <!--begin::Title-->
                        <div class="d-flex flex-column">
                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"KPI
                                Monitoring App Launch</a>
                            <span class="fs-7 text-muted fw-semibold">#84250</span>
                        </div>
                        <!--end::Title-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-center mb-5">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">
                                <i class="ki-duotone ki-chart-line-down fs-2 text-primary"><span
                                        class="path1"></span><span class="path2"></span></i>
                            </span>
                        </div>
                        <!--end::Symbol-->

                        <!--begin::Title-->
                        <div class="d-flex flex-column">
                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">Project
                                Reference FAQ</a>
                            <span class="fs-7 text-muted fw-semibold">#67945</span>
                        </div>
                        <!--end::Title-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-center mb-5">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">
                                <i class="ki-duotone ki-sms fs-2 text-primary"><span class="path1"></span><span
                                        class="path2"></span></i>
                            </span>
                        </div>
                        <!--end::Symbol-->

                        <!--begin::Title-->
                        <div class="d-flex flex-column">
                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"FitPro
                                App Development</a>
                            <span class="fs-7 text-muted fw-semibold">#84250</span>
                        </div>
                        <!--end::Title-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-center mb-5">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">
                                <i class="ki-duotone ki-bank fs-2 text-primary"><span class="path1"></span><span
                                        class="path2"></span></i>
                            </span>
                        </div>
                        <!--end::Symbol-->

                        <!--begin::Title-->
                        <div class="d-flex flex-column">
                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">Shopix
                                Mobile App</a>
                            <span class="fs-7 text-muted fw-semibold">#45690</span>
                        </div>
                        <!--end::Title-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-center mb-5">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">
                                <i class="ki-duotone ki-chart-line-down fs-2 text-primary"><span
                                        class="path1"></span><span class="path2"></span></i>
                            </span>
                        </div>
                        <!--end::Symbol-->

                        <!--begin::Title-->
                        <div class="d-flex flex-column">
                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Landing
                                UI Design" Launch</a>
                            <span class="fs-7 text-muted fw-semibold">#24005</span>
                        </div>
                        <!--end::Title-->
                    </div>
                    <!--end::Item-->
                </div>
                <!--end::Items-->
            </div>
            <!--end::Main content element-->

            <!--begin::Empty search-->
            <div data-kt-search-element="empty" class="text-center d-none">
                <!--begin::Icon-->
                <div class="pt-10 pb-10">
                    <i class="ki-duotone ki-search-list fs-4x opacity-50"><span class="path1"></span><span
                            class="path2"></span><span class="path3"></span></i>
                </div>
                <!--end::Icon-->

                <!--begin::Message-->
                <div class="pb-15 fw-semibold">
                    <h3 class="text-gray-600 fs-5 mb-2">No se han encontrado resultados</h3>
                    <div class="text-muted fs-7">Inténtelo de nuevo con otra consulta</div>
                </div>
                <!--end::Message-->
            </div>
            <!--end::Empty search-->
        </div>
        <!--end::Wrapper-->

        <!--begin::Search Advanced Options-->
        <form data-kt-search-element="advanced-options-form" class="pt-1 d-none">
            <!--begin::Heading-->
            <h3 class="fw-semibold text-gray-900 mb-7">Advanced Search</h3>
            <!--end::Heading-->

            <!--begin::Input group-->
            <div class="mb-5">
                <input type="text" class="form-control form-control-sm form-control-solid"
                    placeholder="Contains the word" name="query">
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="mb-5">
                <!--begin::Radio group-->
                <div class="nav-group nav-group-fluid">
                    <!--begin::Option-->
                    <label>
                        <input type="radio" class="btn-check" name="type" value="has" checked="checked">
                        <span class="btn btn-sm btn-color-muted btn-active btn-active-primary">
                            All
                        </span>
                    </label>
                    <!--end::Option-->

                    <!--begin::Option-->
                    <label>
                        <input type="radio" class="btn-check" name="type" value="users">
                        <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">
                            Users
                        </span>
                    </label>
                    <!--end::Option-->

                    <!--begin::Option-->
                    <label>
                        <input type="radio" class="btn-check" name="type" value="orders">
                        <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">
                            Orders
                        </span>
                    </label>
                    <!--end::Option-->

                    <!--begin::Option-->
                    <label>
                        <input type="radio" class="btn-check" name="type" value="projects">
                        <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">
                            Projects
                        </span>
                    </label>
                    <!--end::Option-->
                </div>
                <!--end::Radio group-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="mb-5">
                <input type="text" name="assignedto" class="form-control form-control-sm form-control-solid"
                    placeholder="Assigned to" value="">
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="mb-5">
                <input type="text" name="collaborators" class="form-control form-control-sm form-control-solid"
                    placeholder="Collaborators" value="">
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="mb-5">
                <!--begin::Radio group-->
                <div class="nav-group nav-group-fluid">
                    <!--begin::Option-->
                    <label>
                        <input type="radio" class="btn-check" name="attachment" value="has" checked="checked">
                        <span class="btn btn-sm btn-color-muted btn-active btn-active-primary">
                            Has attachment
                        </span>
                    </label>
                    <!--end::Option-->

                    <!--begin::Option-->
                    <label>
                        <input type="radio" class="btn-check" name="attachment" value="any">
                        <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">
                            Any
                        </span>
                    </label>
                    <!--end::Option-->
                </div>
                <!--end::Radio group-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="mb-5">
                <select name="timezone" aria-label="Select a Timezone" data-control="select2"
                    data-dropdown-parent="#kt_header_search" data-placeholder="date_period"
                    class="form-select form-select-sm form-select-solid select2-hidden-accessible"
                    data-select2-id="select2-data-1-mcf0" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                    <option value="next" data-select2-id="select2-data-3-jmwf">
                        Within the next</option>
                    <option value="last">Within the last</option>
                    <option value="between">Between</option>
                    <option value="on">On</option>
                </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr"
                    data-select2-id="select2-data-2-vyvp" style="width: 100%;"><span class="selection"><span
                            class="select2-selection select2-selection--single form-select form-select-sm form-select-solid"
                            role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                            aria-disabled="false" aria-labelledby="select2-timezone-2x-container"
                            aria-controls="select2-timezone-2x-container"><span class="select2-selection__rendered"
                                id="select2-timezone-2x-container" role="textbox" aria-readonly="true"
                                title="Within the next">Within
                                the next</span><span class="select2-selection__arrow" role="presentation"><b
                                    role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                        aria-hidden="true"></span></span>
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="row mb-8">
                <!--begin::Col-->
                <div class="col-6">
                    <input type="number" name="date_number" class="form-control form-control-sm form-control-solid"
                        placeholder="Lenght" value="">
                </div>
                <!--end::Col-->

                <!--begin::Col-->
                <div class="col-6">
                    <select name="date_typer" aria-label="Select a Timezone" data-control="select2"
                        data-dropdown-parent="#kt_header_search" data-placeholder="Period"
                        class="form-select form-select-sm form-select-solid select2-hidden-accessible"
                        data-select2-id="select2-data-4-bs49" tabindex="-1" aria-hidden="true"
                        data-kt-initialized="1">
                        <option value="days" data-select2-id="select2-data-6-xdi0">Days
                        </option>
                        <option value="weeks">Weeks</option>
                        <option value="months">Months</option>
                        <option value="years">Years</option>
                    </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr"
                        data-select2-id="select2-data-5-hau1" style="width: 100%;"><span class="selection"><span
                                class="select2-selection select2-selection--single form-select form-select-sm form-select-solid"
                                role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                aria-disabled="false" aria-labelledby="select2-date_typer-7i-container"
                                aria-controls="select2-date_typer-7i-container"><span
                                    class="select2-selection__rendered" id="select2-date_typer-7i-container"
                                    role="textbox" aria-readonly="true" title="Days">Days</span><span
                                    class="select2-selection__arrow" role="presentation"><b
                                        role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                            aria-hidden="true"></span></span>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->

            <!--begin::Actions-->
            <div class="d-flex justify-content-end">
                <button type="reset" class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2"
                    data-kt-search-element="advanced-options-form-cancel">Cancel</button>

                <a href="/blaze-html-pro/utilities/search/horizontal.html" class="btn btn-sm fw-bold btn-primary"
                    data-kt-search-element="advanced-options-form-search">Search</a>
            </div>
            <!--end::Actions-->
        </form>
        <!--end::Search Advanced Options-->

        <!--begin::Search Preference-->
        <form data-kt-search-element="preferences" class="pt-1 d-none" id="formPreferenciasBusqueda">
            <!--begin::Heading-->
            <h3 class="fw-semibold text-gray-900 mb-7">Preferencias de busqueda</h3>
            <!--end::Heading-->

            @yield('preferenciasB')
            
            <!--begin::Actions-->
            <div class="d-flex justify-content-end pt-7">
                <button type="button" class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2" data-kt-search-element="preferences-dismiss">Atras</button>
                {{-- <button type="submit" class="btn btn-sm fw-bold btn-primary">Guardar</button> --}}
            </div>
            <!--end::Actions-->
        </form>
        <!--end::Search Preference-->
    </div>
    <!--end::Menu-->
</div>
