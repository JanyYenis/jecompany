<!--begin::App layout builder-->
<div id="kt_app_layout_builder" class="bg-body drawer drawer-end" data-kt-drawer="true" data-kt-drawer-name="app-settings"
    data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'lg': '380px'}"
    data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_app_layout_builder_toggle"
    data-kt-drawer-close="#kt_app_layout_builder_close" style="width: 380px !important;">

    <!--begin::Card-->
    <div class="card border-0 shadow-none rounded-0 w-100">
        <!--begin::Card header-->
        <div class="card-header bgi-position-y-bottom bgi-position-x-end bgi-size-cover bgi-no-repeat rounded-0 border-0 py-4"
            id="kt_app_layout_builder_header"
            style="background-image:url({{ asset('assets/media//misc/pattern-2.jpg') }})">

            <!--begin::Card title-->
            <h3 class="card-title fs-3 fw-bold text-white flex-column m-0">
                Blaze HTML Pro Builder

                <small class="text-white opacity-50 fs-7 fw-semibold pt-1">
                    Get your product deeply customized
                </small>
            </h3>
            <!--end::Card title-->

            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <button type="button" class="btn btn-sm btn-icon btn-color-white p-0 w-20px h-20px rounded-1"
                    id="kt_app_layout_builder_close">
                    <i class="ki-duotone ki-cross-square fs-2"><span class="path1"></span><span
                            class="path2"></span></i> </button>
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body position-relative" id="kt_app_layout_builder_body">
            <!--begin::Content-->
            <div id="kt_app_settings_content" class="position-relative scroll-y me-n5 pe-5" data-kt-scroll="true"
                data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_app_layout_builder_body"
                data-kt-scroll-dependencies="#kt_app_layout_builder_header, #kt_app_layout_builder_footer"
                data-kt-scroll-offset="5px" style="height: 531px;">

                <!--begin::Form-->
                <form class="form" method="POST" id="kt_app_layout_builder_form" action="/blaze-html-pro/index.php">
                    <input type="hidden" id="kt_app_layout_builder_action" name="layout-builder[action]">

                    <!--begin::Card body-->
                    <div class="card-body p-0">
                        <!--begin::Form group-->
                        <div class="form-group">
                            <!--begin::Heading-->
                            <div class="mb-6">
                                <h4 class="fw-bold text-gray-900">Theme Mode</h4>
                                <div class="fw-semibold text-muted fs-7 d-block lh-1">
                                    Enjoy Dark &amp; Light modes.

                                    <a class="fw-semibold"
                                        href="https://preview.keenthemes.com/html/blaze-html-pro/docs/getting-started/dark-mode"
                                        target="_blank">See docs</a>
                                </div>
                            </div>
                            <!--end::Heading-->

                            <!--begin::Options-->
                            <div class="row " data-kt-buttons="true"
                                data-kt-buttons-target=".form-check-image,.form-check-input" data-kt-initialized="1">
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Option-->
                                    <label class="form-check-image form-check-success active">
                                        <!--begin::Image-->
                                        <div class="form-check-wrapper border-gray-200 border-2">
                                            <img src="{{ asset('assets/media/preview/light.png') }}"
                                                class="mw-100 mh-250px" alt="">
                                        </div>
                                        <!--end::Image-->

                                        <!--begin::Check-->
                                        <div
                                            class="form-check form-check-custom form-check-solid form-check-sm form-check-success">
                                            <input class="form-check-input" type="radio" value="light"
                                                name="theme_mode" id="kt_layout_builder_theme_mode_light">

                                            <!--begin::Label-->
                                            <div class="form-check-label text-gray-700">
                                                Light </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Check-->
                                    </label>
                                    <!--end::Option-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Option-->
                                    <label class="form-check-image form-check-success">
                                        <!--begin::Image-->
                                        <div class="form-check-wrapper border-gray-200 border-2">
                                            <img src="{{ asset('assets/media/preview/dark.png') }}"
                                                class="mw-100 mh-250px" alt="">
                                        </div>
                                        <!--end::Image-->

                                        <!--begin::Check-->
                                        <div
                                            class="form-check form-check-custom form-check-solid form-check-sm form-check-success">
                                            <input class="form-check-input" type="radio" value="dark"
                                                name="theme_mode" id="kt_layout_builder_theme_mode_dark">

                                            <!--begin::Label-->
                                            <div class="form-check-label text-gray-700">
                                                Dark </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Check-->
                                    </label>
                                    <!--end::Option-->
                                </div>
                                <!--end::Col-->

                            </div>
                            <!--end::Options-->
                        </div>
                        <!--end::Form group-->
                        <div class="separator separator-dashed my-5"></div>

                        <!--begin::Form group-->
                        <div class="form-group d-flex flex-stack">
                            <!--begin::Heading-->
                            <div class="d-flex flex-column">
                                <h4 class="fw-bold text-gray-900">RTL Mode</h4>
                                <div class="fs-7 fw-semibold text-muted">
                                    Change Language Direction.

                                    <a class="fw-semibold"
                                        href="https://preview.keenthemes.com/html/blaze-html-pro/docs/getting-started/rtl"
                                        target="_blank">See docs</a>
                                </div>
                            </div>
                            <!--end::Heading-->

                            <!--begin::Option-->
                            <div class="d-flex justify-content-end">
                                <!--begin::Check-->
                                <div
                                    class="form-check form-check-custom form-check-solid form-check-success form-switch">
                                    <input type="hidden" value="false"
                                        name="layout-builder[layout][app][general][rtl]">

                                    <input class="form-check-input w-45px h-30px" type="checkbox" value="true"
                                        name="layout-builder[layout][app][general][rtl]">
                                </div>
                                <!--end::Check-->
                            </div>
                            <!--end::Option-->
                        </div>
                        <!--end::Form group-->
                        <div class="separator separator-dashed my-5"></div>


                        <!--begin::Form group-->
                        <div class="form-group ">
                            <!--begin::Heading-->
                            <div class="d-flex flex-column mb-4">
                                <h4 class="fw-bold text-gray-900">Width Mode</h4>
                                <div class="fs-7 fw-semibold text-muted">Page width options</div>
                            </div>
                            <!--end::Heading-->

                            <!--begin::Options-->
                            <div class="d-flex gap-7">
                                <!--begin::Check-->
                                <div
                                    class="form-check form-check-custom form-check-success form-check-solid form-check-sm">
                                    <input class="form-check-input" type="radio" checked="" value="default"
                                        id="kt_layout_builder_page_width_default"
                                        name="layout-builder[layout][app][general][page-width]">

                                    <!--begin::Label-->
                                    <label class="form-check-label text-gray-700 fw-bold text-nowrap"
                                        for="kt_layout_builder_page_width_default">
                                        Default </label>
                                    <!--end::Label-->
                                </div>
                                <!--end::Check-->
                                <!--begin::Check-->
                                <div
                                    class="form-check form-check-custom form-check-success form-check-solid form-check-sm">
                                    <input class="form-check-input" type="radio" value="fluid"
                                        id="kt_layout_builder_page_width_fluid"
                                        name="layout-builder[layout][app][general][page-width]">

                                    <!--begin::Label-->
                                    <label class="form-check-label text-gray-700 fw-bold text-nowrap"
                                        for="kt_layout_builder_page_width_fluid">
                                        Fluid </label>
                                    <!--end::Label-->
                                </div>
                                <!--end::Check-->
                                <!--begin::Check-->
                                <div
                                    class="form-check form-check-custom form-check-success form-check-solid form-check-sm">
                                    <input class="form-check-input" type="radio" value="fixed"
                                        id="kt_layout_builder_page_width_fixed"
                                        name="layout-builder[layout][app][general][page-width]">

                                    <!--begin::Label-->
                                    <label class="form-check-label text-gray-700 fw-bold text-nowrap"
                                        for="kt_layout_builder_page_width_fixed">
                                        Fixed </label>
                                    <!--end::Label-->
                                </div>
                                <!--end::Check-->
                            </div>
                            <!--end::Options-->
                        </div>
                        <!--end::Form group-->
                        <div class="separator separator-dashed my-5"></div>


                        <!--begin::Form group-->
                        <div class="form-group ">
                            <!--begin::Heading-->
                            <div class="d-flex flex-column mb-4">
                                <h4 class="fw-bold text-gray-900">KeenIcons Style</h4>

                                <div>
                                    <span class="fs-7 fw-semibold text-muted">Select global UI icons style.</span>
                                    <a class="fw-semibold"
                                        href="https://preview.keenthemes.com/html/blaze-html-pro/docs/icons/keenicons"
                                        target="_blank">Learn more</a>
                                </div>
                            </div>
                            <!--end::Heading-->

                            <!--begin::Options-->
                            <div class="d-flex flex-stack gap-3 " data-kt-buttons="true"
                                data-kt-buttons-target=".form-check-image,.form-check-input" data-kt-initialized="1">

                                <!--begin::Option-->
                                <label
                                    class="form-check-image form-check-success w-100 parent-active parent-hover active">
                                    <!--begin::Image-->
                                    <div
                                        class="form-check-wrapper d-flex flex-center border-gray-200 border-2 mb-0 py-3 px-4">
                                        <i
                                            class="ki-duotone ki-picture fs-1 text-gray-500 parent-active-gray-700 parent-hover-gray-700"><span
                                                class="path1"></span><span class="path2"></span></i>
                                        <span
                                            class="fs-7 fw-semibold ms-2 text-gray-500 parent-active-gray-700 parent-hover-gray-700">Duotone</span>
                                    </div>
                                    <!--end::Image-->

                                    <!--begin::Check-->
                                    <div
                                        style="visibility: hidden; height: 0 !important; width: 0 !importnat; overflow:hidden">
                                        <input class="form-check-input" type="radio" value="duotone"
                                            checked="" name="layout-builder[layout][app][general][icons]">
                                    </div>
                                    <!--end::Check-->
                                </label>
                                <!--end::Option-->

                                <!--begin::Option-->
                                <label class="form-check-image form-check-success w-100 parent-active parent-hover ">
                                    <!--begin::Image-->
                                    <div
                                        class="form-check-wrapper d-flex flex-center border-gray-200 border-2 mb-0 py-3 px-4">
                                        <i
                                            class="ki-outline ki-picture fs-1 text-gray-500 parent-active-gray-700 parent-hover-gray-700"></i>
                                        <span
                                            class="fs-7 fw-semibold ms-2 text-gray-500 parent-active-gray-700 parent-hover-gray-700">Outline</span>
                                    </div>
                                    <!--end::Image-->

                                    <!--begin::Check-->
                                    <div
                                        style="visibility: hidden; height: 0 !important; width: 0 !importnat; overflow:hidden">
                                        <input class="form-check-input" type="radio" value="outline"
                                            name="layout-builder[layout][app][general][icons]">
                                    </div>
                                    <!--end::Check-->
                                </label>
                                <!--end::Option-->

                                <!--begin::Option-->
                                <label class="form-check-image form-check-success w-100 parent-active parent-hover ">
                                    <!--begin::Image-->
                                    <div
                                        class="form-check-wrapper d-flex flex-center border-gray-200 border-2 mb-0 py-3 px-4">
                                        <i
                                            class="ki-solid ki-picture fs-1 text-gray-500 parent-active-gray-700 parent-hover-gray-700"></i>
                                        <span
                                            class="fs-7 fw-semibold ms-2 text-gray-500 parent-active-gray-700 parent-hover-gray-700">Solid</span>
                                    </div>
                                    <!--end::Image-->

                                    <!--begin::Check-->
                                    <div
                                        style="visibility: hidden; height: 0 !important; width: 0 !importnat; overflow:hidden">
                                        <input class="form-check-input" type="radio" value="solid"
                                            name="layout-builder[layout][app][general][icons]">
                                    </div>
                                    <!--end::Check-->
                                </label>
                                <!--end::Option-->

                            </div>
                            <!--end::Options-->
                        </div>
                        <!--end::Form group-->
                        <div class="separator separator-dashed my-5"></div>


                        <!--begin::Form group-->
                        <div class="form-group d-flex flex-stack">
                            <!--begin::Heading-->
                            <div class="d-flex flex-column">
                                <h4 class="fw-bold text-gray-900">Minimize Header</h4>

                                <div class="fs-7 fw-semibold text-muted">
                                    Enable minimize header
                                </div>
                            </div>
                            <!--end::Heading-->

                            <!--begin::Option-->
                            <div class="d-flex justify-content-end">
                                <!--begin::Check-->
                                <div
                                    class="form-check form-check-custom form-check-solid form-check-success form-switch">
                                    <input type="hidden" value="false"
                                        name="layout-builder[layout][app][header][default][minimize][enabled]">
                                    <input class="form-check-input w-45px h-30px" type="checkbox" checked=""
                                        value="true"
                                        name="layout-builder[layout][app][header][default][minimize][enabled]"
                                        id="kt_builder_header_header_and_toolbar_minimize">
                                </div>
                                <!--end::Check-->
                            </div>
                            <!--end::Option-->
                        </div>
                        <!--end::Form group-->


                        <div class="separator separator-dashed my-5"></div>


                        <!--begin::Form group-->
                        <div class="form-group d-flex flex-stack">
                            <!--begin::Heading-->
                            <div class="d-flex flex-column">
                                <h4 class="fw-bold text-gray-900">Toolbar</h4>
                                <div class="fs-7 fw-semibold text-muted">
                                    Enable or disable Toolbar

                                    <a href="/blaze-html-pro/layout-builder.html" class="fw-semibold text-primary">
                                        More layout options
                                    </a>
                                </div>
                            </div>
                            <!--end::Heading-->

                            <!--begin::Option-->
                            <div class="d-flex justify-content-end">
                                <!--begin::Check-->
                                <div
                                    class="form-check form-check-custom form-check-solid form-check-success form-switch">
                                    <input type="hidden" value="false"
                                        name="layout-builder[layout][app][toolbar][display]">
                                    <input class="form-check-input w-45px h-30px" type="checkbox" checked=""
                                        value="true" name="layout-builder[layout][app][toolbar][display]"
                                        id="kt_builder_toolbar_display">

                                    <!--begin::Label-->
                                    <label class="form-check-label text-gray-700 fw-bold"
                                        for="kt_builder_toolbar_display"></label>
                                    <!--end::Label-->
                                </div>
                                <!--end::Check-->
                            </div>
                            <!--end::Option-->
                        </div>
                        <!--end::Form group-->

                    </div>
                    <!--end::Card body-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Card body-->

        <!--begin::Card footer-->
        <div class="card-footer border-0 d-flex gap-3 pb-9 pt-0" id="kt_app_layout_builder_footer">
            <button type="button" id="kt_app_layout_builder_preview"
                class="btn btn-primary flex-grow-1 fw-semibold">

                <!--begin::Indicator label-->
                <span class="indicator-label">
                    Preview</span>
                <!--end::Indicator label-->

                <!--begin::Indicator progress-->
                <span class="indicator-progress">
                    Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                </span>
                <!--end::Indicator progress--> </button>

            <button type="button" id="kt_app_layout_builder_reset" class="btn btn-light flex-grow-1 fw-semibold">

                <!--begin::Indicator label-->
                <span class="indicator-label">
                    Reset</span>
                <!--end::Indicator label-->

                <!--begin::Indicator progress-->
                <span class="indicator-progress">
                    Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                </span>
                <!--end::Indicator progress--> </button>
        </div>
        <!--end::Card footer-->
    </div>
    <!--end::Card-->
</div>
<!--end::App layout builder-->

<!--begin::App settings toggle-->
<button id="kt_app_layout_builder_toggle" class="btn btn-dark app-layout-builder-toggle lh-1 py-4 "
    data-bs-custom-class="tooltip-inverse" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-dismiss="click"
    data-bs-trigger="hover" data-bs-original-title="Blaze HTML Pro Builder" data-kt-initialized="1">
    <i class="fas fa-cog fs-4 me-1"></i> Personalizar
</button>
<!--end::App settings toggle-->
