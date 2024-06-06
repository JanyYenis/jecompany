@extends('layouts.index')

@section('breadcrumb')
    <li class="breadcrumb-item text-dark">
        <a href="{{ route('keenthemes.cuenta.seguridad') }}" class="text-dark">Seguridad</a>
    </li>
@endsection

@section('content')
    <div class="row g-xxl-9">
        <!--begin::Col-->
        <div class="col-xxl-8">
            <!--begin::Security summary-->
            <div class="card card-xxl-stretch mb-5 mb-xl-10">
                <!--begin::Header-->
                <div class="card-header card-header-stretch">
                    <!--begin::Title-->
                    <div class="card-title">
                        <h3 class="m-0 text-gray-900">Resumen de seguridad</h3>
                    </div>
                    <!--end::Title-->

                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <ul class="nav nav-tabs nav-line-tabs nav-stretch border-transparent fs-5 fw-bold"
                            id="kt_security_summary_tabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link text-active-primary active" data-kt-countup-tabs="true"
                                    data-bs-toggle="tab" href="#kt_security_summary_tab_pane_hours" data-kt-initialized="1"
                                    aria-selected="false" role="tab" tabindex="-1">12 Horas</a>
                            </li>

                            <li class="nav-item" role="presentation">
                                <a class="nav-link text-active-primary" data-kt-countup-tabs="true" data-bs-toggle="tab"
                                    id="kt_security_summary_tab_day" href="#kt_security_summary_tab_pane_day"
                                    data-kt-initialized="1" aria-selected="false" role="tab" tabindex="-1">Hoy</a>
                            </li>

                            <li class="nav-item" role="presentation">
                                <a class="nav-link text-active-primary" data-kt-countup-tabs="true" data-bs-toggle="tab"
                                    id="kt_security_summary_tab_week" href="#kt_security_summary_tab_pane_week"
                                    data-kt-initialized="1" aria-selected="true" role="tab">Esta semana</a>
                            </li>
                        </ul>
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->

                <!--begin::Body-->
                <div class="card-body pt-7 pb-0 px-0">
                    <!--begin::Tab content-->
                    <div class="tab-content">
                        <!--begin::Tab panel-->
                        <div class="tab-pane fade active show" id="kt_security_summary_tab_pane_hours" role="tabpanel">
                            <!--begin::Row-->
                            <div class="row p-0 mb-5 px-9">
                                <!--begin::Col-->
                                <div class="col">
                                    <div
                                        class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-4 pb-2 my-3">
                                        <span class="fs-4 fw-semibold text-success d-block">Usuarios Sign-in</span>
                                        <span class="fs-2hx fw-bold text-gray-900" id="accesosDoceHoras" data-kt-countup="true" data-kt-countup-value="0">0</span>
                                    </div>
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col">
                                    <div
                                        class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-4 pb-2 my-3">
                                        <span class="fs-4 fw-semibold text-primary d-block">Admin Sign-in</span>
                                        <span class="fs-2hx fw-bold text-gray-900" id="accesosDoceHorasAdmins" data-kt-countup="true" data-kt-countup-value="0">0</span>
                                    </div>
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col">
                                    <div
                                        class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-4 pb-2 my-3">
                                        <span class="fs-4 fw-semibold text-danger d-block">Intentos fallidos</span>
                                        <span class="fs-2hx fw-bold text-gray-900" id="accesosDoceHorasFallidos" data-kt-countup="true" data-kt-countup-value="0">0</span>
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->

                            <!--begin::Container-->
                            <div class="pt-2">
                                <!--begin::Tabs-->
                                <div class="d-flex align-items-center pb-6 px-9">
                                    <!--begin::Title-->
                                    <h3 class="m-0 text-gray-900 flex-grow-1">
                                        Chart de actividades
                                    </h3>
                                    <!--end::Title-->

                                    <!--begin::Nav pills-->
                                    <ul class="nav nav-pills nav-line-pills border rounded p-1" role="tablist">
                                        <li class="nav-item me-2" role="presentation">
                                            <a class="nav-link btn btn-active-light btn-active-color-gray-700 btn-color-gray-500 py-2 px-5 fs-6 fw-semibold active"
                                                data-bs-toggle="tab" id="kt_security_summary_tab_hours_agents"
                                                href="#kt_security_summary_tab_pane_hours_agents" aria-selected="true"
                                                role="tab">
                                                Admins
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link btn btn-active-light btn-active-color-gray-700 btn-color-gray-500 py-2 px-5 fs-6 fw-semibold"
                                                data-bs-toggle="tab" id="kt_security_summary_tab_hours_clients"
                                                href="#kt_security_summary_tab_pane_hours_clients" aria-selected="false"
                                                role="tab" tabindex="-1">
                                                Clientes
                                            </a>
                                        </li>
                                    </ul>
                                    <!--end::Nav pills-->
                                </div>
                                <!--end::Tabs-->

                                <!--begin::Tab content-->
                                <div class="tab-content px-3">
                                    <!--begin::Tab pane-->
                                    <div class="tab-pane fade active show" id="kt_security_summary_tab_pane_hours_agents"
                                        role="tabpanel" aria-labelledby="kt_security_summary_tab_hours_agents">
                                        <!--begin::Chart-->
                                        <div id="kt_security_summary_chart_hours_agents"
                                            style="height: 300px; min-height: 315px;">
                                        </div>
                                        <!--end::Chart-->
                                    </div>
                                    <!--end::Tab pane-->

                                    <!--begin::Tab pane-->
                                    <div class="tab-pane fade" id="kt_security_summary_tab_pane_hours_clients"
                                        role="tabpanel" aria-labelledby="kt_security_summary_tab_hours_clients">
                                        <!--begin::Chart-->
                                        <div id="kt_security_summary_chart_hours_clients"
                                            style="height: 300px; min-height: 315px;">
                                        </div>
                                        <!--end::Chart-->
                                    </div>
                                    <!--end::Tab pane-->
                                </div>
                                <!--end::Tab content-->
                            </div>
                            <!--end::Container-->
                        </div>
                        <!--end::Tab panel-->

                        <!--begin::Tab panel-->
                        <div class="tab-pane fade" id="kt_security_summary_tab_pane_day" role="tabpanel"
                            aria-labelledby="kt_security_summary_tab_day">
                            <!--begin::Row-->
                            <div class="row p-0 mb-5 px-9">
                                <!--begin::Col-->
                                <div class="col">
                                    <div
                                        class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-4 pb-2 my-3">
                                        <span class="fs-4 fw-semibold text-success d-block">Usuarios Sign-in</span>
                                        <span class="fs-2hx fw-bold text-gray-800" id="accesosHoy" data-kt-countup="true" data-kt-countup-value="0">0</span>
                                    </div>
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col">
                                    <div
                                        class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-4 pb-2 my-3">
                                        <span class="fs-4 fw-semibold text-primary d-block">Admin Sign-in</span>
                                        <span class="fs-2hx fw-bold text-gray-800" id="accesosHoyAdmins" data-kt-countup="true" data-kt-countup-value="0">0</span>
                                    </div>
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col">
                                    <div
                                        class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-4 pb-2 my-3">
                                        <span class="fs-4 fw-semibold text-danger d-block">Intentos fallidos</span>
                                        <span class="fs-2hx fw-bold text-gray-800" id="accesosHoyFallidos" data-kt-countup="true" data-kt-countup-value="0">0</span>
                                    </div>
                                </div>
                            </div>
                            <!--end::Row-->

                            <!--begin::Container-->
                            <div class="pt-2">
                                <!--begin::Tabs-->
                                <div class="d-flex align-items-center pb-9 px-9">
                                    <h3 class="m-0 text-gray-800 flex-grow-1">Chart de actividades</h3>

                                    <!--begin::Nav pills-->
                                    <ul class="nav nav-pills nav-line-pills border rounded p-1" role="tablist">
                                        <li class="nav-item me-2" role="presentation">
                                            <a class="nav-link btn btn-active-light btn-active-color-gray-700 btn-color-gray-500 py-2 px-5 fs-6 fw-semibold active"
                                                data-bs-toggle="tab" id="kt_security_summary_tab_day_agents"
                                                href="#kt_security_summary_tab_pane_day_agents" aria-selected="true"
                                                role="tab">
                                                Admins
                                            </a>
                                        </li>

                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link btn btn-active-light btn-active-color-gray-700 btn-color-gray-500 py-2 px-5 fs-6 fw-semibold"
                                                data-bs-toggle="tab" id="kt_security_summary_tab_day_clients"
                                                href="#kt_security_summary_tab_pane_day_clients" aria-selected="false"
                                                tabindex="-1" role="tab">
                                                Clientes
                                            </a>
                                        </li>
                                    </ul>
                                    <!--end::Nav pills-->
                                </div>
                                <!--end::Tabs-->

                                <!--begin::Tab content-->
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="kt_security_summary_tab_pane_day_agents"
                                        role="tabpanel" aria-labelledby="kt_security_summary_tab_day_agents">
                                        <!--begin::Chart-->
                                        <div id="kt_security_summary_chart_day_agents"
                                            style="height: 300px; min-height: 315px;">
                                        </div>
                                        <!--end::Chart-->
                                    </div>
                                    <div class="tab-pane fade" id="kt_security_summary_tab_pane_day_clients"
                                        role="tabpanel" aria-labelledby="kt_security_summary_tab_day_clients">
                                        <!--begin::Chart-->
                                        <div id="kt_security_summary_chart_day_clients" style="height: 300px"></div>
                                        <!--end::Chart-->
                                    </div>
                                </div>
                                <!--end::Tab content-->
                            </div>
                            <!--end::Container-->
                        </div>
                        <!--end::Tab panel-->

                        <!--begin::Tab panel-->
                        <div class="tab-pane fade" id="kt_security_summary_tab_pane_week" role="tabpanel"
                            aria-labelledby="kt_security_summary_tab_week">
                            <!--begin::Row-->
                            <div class="row p-0 mb-5 px-9">
                                <!--begin::Col-->
                                <div class="col">
                                    <div
                                        class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-4 pb-2 my-3">
                                        <span class="fs-lg-4 fs-6 fw-semibold text-success d-block">Usuarios Sign-in</span>
                                        <span class="fs-lg-2hx fs-2 fw-bold text-gray-800" data-kt-countup="true"
                                            data-kt-countup-value="340">0</span>
                                    </div>
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col">
                                    <div
                                        class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-4 pb-2 my-3">
                                        <span class="fs-lg-4 fs-6 fw-semibold text-primary d-block">Admin Sign-in</span>
                                        <span class="fs-lg-2hx fs-2 fw-bold text-gray-800" data-kt-countup="true"
                                            data-kt-countup-value="90">0</span>
                                    </div>
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col">
                                    <div
                                        class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-4 pb-2 my-3">
                                        <span class="fs-lg-4 fs-6 fw-semibold text-danger d-block">Intentos fallidos</span>
                                        <span class="fs-lg-2hx fs-2 fw-bold text-gray-800" data-kt-countup="true"
                                            data-kt-countup-value="230">0</span>
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->

                            <!--begin::Container-->
                            <div class="pt-2">
                                <!--begin::Tabs-->
                                <div class="d-flex align-items-center pb-9 px-9">
                                    <h3 class="m-0 text-gray-800 flex-grow-1">Chart de actividades</h3>

                                    <!--begin::Nav pills-->
                                    <ul class="nav nav-pills nav-line-pills border rounded p-1" role="tablist">
                                        <li class="nav-item me-2" role="presentation">
                                            <a class="nav-link btn btn-active-light py-2 px-5 fs-6 btn-active-color-gray-700 btn-color-gray-500 fw-semibold active"
                                                data-bs-toggle="tab" id="kt_security_summary_tab_week_agents"
                                                href="#kt_security_summary_tab_pane_week_agents" aria-selected="true"
                                                role="tab">
                                                Admins
                                            </a>
                                        </li>

                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link btn btn-active-light py-2 px-5 btn-active-color-gray-700 btn-color-gray-500 fs-6 fw-semibold"
                                                data-bs-toggle="tab" id="kt_security_summary_tab_week_clients"
                                                href="#kt_security_summary_tab_pane_week_clients" aria-selected="false"
                                                tabindex="-1" role="tab">
                                                Clientes
                                            </a>
                                        </li>
                                    </ul>
                                    <!--end::Nav pills-->
                                </div>
                                <!--end::Tabs-->

                                <!--begin::Tab content-->
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="kt_security_summary_tab_pane_week_agents"
                                        role="tabpanel" aria-labelledby="kt_security_summary_tab_week_agents">
                                        <!--begin::Chart-->
                                        <div id="kt_security_summary_chart_week_agents"
                                            style="height: 300px; min-height: 315px;">
                                        </div>
                                        <!--end::Chart-->
                                    </div>
                                    <div class="tab-pane fade" id="kt_security_summary_tab_pane_week_clients"
                                        role="tabpanel" aria-labelledby="kt_security_summary_tab_week_clients">
                                        <!--begin::Chart-->
                                        <div id="kt_security_summary_chart_week_clients" style="height: 300px"></div>
                                        <!--end::Chart-->
                                    </div>
                                </div>
                                <!--end::Tab content-->
                            </div>
                            <!--end::Container-->
                        </div>
                        <!--end::Tab panel-->
                    </div>
                    <!--end::Tab content-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Security summary-->
        </div>
        <!--end::Col-->

        <!--begin::Col-->
        <div class="col-xxl-4">
            <!--begin::Security recent alerts-->
            <div class="card card-xxl-stretch-50 mb-5 mb-xl-10">
                <!--begin::Body-->
                <div class="card-body pt-5">
                    <!--begin::Carousel-->
                    <div id="kt_security_recent_alerts" class="carousel carousel-custom carousel-stretch slide"
                        data-bs-ride="carousel" data-bs-interval="8000">
                        <!--begin::Heading-->
                        <div class="d-flex flex-stack align-items-center flex-wrap">
                            <h4 class="text-gray-500 fw-semibold mb-0 pe-2">
                                Alertas recientes
                            </h4>

                            <!--begin::Carousel Indicators-->
                            <ol class="p-0 m-0 carousel-indicators carousel-indicators-dots">
                                <li data-bs-target="#kt_security_recent_alerts" data-bs-slide-to="0" class="ms-1">
                                </li>
                                <li data-bs-target="#kt_security_recent_alerts" data-bs-slide-to="1" class="ms-1 active"
                                    aria-current="true"></li>
                                <li data-bs-target="#kt_security_recent_alerts" data-bs-slide-to="2" class="ms-1">
                                </li>
                            </ol>
                            <!--end::Carousel Indicators-->
                        </div>
                        <!--end::Heading-->

                        <!--begin::Carousel inner-->
                        <div class="carousel-inner pt-6">
                            <!--begin::Item-->
                            <div class="carousel-item">
                                <!--begin::Wrapper-->
                                <div class="carousel-wrapper">
                                    <!--begin::Description-->
                                    <div class="d-flex flex-column flex-grow-1">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary">
                                            Últimos anuncios
                                        </a>

                                        <p class="text-gray-600 fs-6 fw-semibold pt-3 mb-0">
                                            En el último año, probablemente hayas tenido que adaptarte a nuevas formas de
                                            vida y
                                            laboral.
                                        </p>
                                    </div>
                                    <!--end::Description-->

                                    <!--begin::Summary-->
                                    <div class="d-flex flex-stack pt-8">
                                        <span class="badge badge-light-primary fs-7 fw-bold me-2">Jun 10, 2021</span>

                                        <a href="#" class="btn btn-sm btn-light">Aprende más</a>
                                    </div>
                                    <!--end::Summary-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Item-->

                            <!--begin::Item-->
                            <div class="carousel-item active">
                                <!--begin::Wrapper-->
                                <div class="carousel-wrapper">
                                    <!--begin::Description-->
                                    <div class="d-flex flex-column flex-grow-1">
                                        <a href="#" class="fw-bold text-gray-900 text-hover-primary">
                                            Intento de acceso fallido
                                        </a>

                                        <p class="text-gray-600 fs-6 fw-semibold pt-3 mb-0">
                                            A medida que nos acercamos a un año de trabajo remoto, queríamos echar una
                                            mirada atrás.
                                            y comparta algunas formas en que equipos de todo el mundo han colaborado de
                                            manera efectiva.
                                        </p>
                                    </div>
                                    <!--end::Description-->

                                    <!--begin::Summary-->
                                    <div class="d-flex flex-stack pt-8">
                                        <span class="badge badge-light-primary fs-7 fw-bold me-2">Oct 05, 2021</span>

                                        <a href="#"
                                            class="btn btn-light btn-sm btn-color-muted fs-7 fw-bold px-5">Join</a>
                                    </div>
                                    <!--end::Summary-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Item-->

                            <!--begin::Item-->
                            <div class="carousel-item">
                                <!--begin::Wrapper-->
                                <div class="carousel-wrapper">
                                    <!--begin::Description-->
                                    <div class="d-flex flex-column flex-grow-1">
                                        <a href="#" class="fw-bold text-gray-900 text-hover-primary">
                                            Las mejores opciones para ti
                                        </a>

                                        <p class="text-gray-600 fs-6 fw-semibold pt-3 mb-0">
                                            Hoy estamos emocionados de compartir una increíble oportunidad de certificación
                                            que es
                                            diseñado para enseñarte todo
                                        </p>
                                    </div>
                                    <!--end::Description-->

                                    <!--begin::Summary-->
                                    <div class="d-flex flex-stack pt-8">
                                        <span class="badge badge-light-primary fs-7 fw-bold me-2">Sep 11, 2021</span>

                                        <a href="#"
                                            class="btn btn-light btn-sm btn-color-muted fs-7 fw-bold px-5">Colaborar</a>
                                    </div>
                                    <!--end::Summary-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Carousel inner-->
                    </div>
                    <!--end::Carousel-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Security recent alerts-->
            <!--begin::Security guidelines-->
            <div class="card card-xxl-stretch-50 mb-5 mb-xl-10">
                <!--begin::Body-->
                <div class="card-body pt-5">
                    <!--begin::Carousel-->
                    <div id="kt_security_guidelines" class="carousel carousel-custom carousel-stretch slide"
                        data-bs-ride="carousel" data-bs-interval="8000">
                        <!--begin::Heading-->
                        <div class="d-flex flex-stack align-items-center flex-wrap">
                            <h4 class="text-gray-500 fw-semibold mb-0 pe-2">
                                Pautas de seguridad
                            </h4>

                            <!--begin::Carousel Indicators-->
                            <ol class="p-0 m-0 carousel-indicators carousel-indicators-dots">
                                <li data-bs-target="#kt_security_guidelines" data-bs-slide-to="0" class="ms-1"></li>
                                <li data-bs-target="#kt_security_guidelines" data-bs-slide-to="1" class="ms-1 active"
                                    aria-current="true"></li>
                                <li data-bs-target="#kt_security_guidelines" data-bs-slide-to="2" class="ms-1"></li>
                            </ol>
                            <!--end::Carousel Indicators-->
                        </div>
                        <!--end::Heading-->

                        <!--begin::Carousel inner-->
                        <div class="carousel-inner pt-6">
                            <!--begin::Item-->
                            <div class="carousel-item">
                                <!--begin::Wrapper-->
                                <div class="carousel-wrapper">
                                    <!--begin::Description-->
                                    <div class="d-flex flex-column flex-grow-1">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary">
                                            Comience su seguridad
                                        </a>

                                        <p class="text-gray-600 fs-6 fw-semibold pt-3 mb-0">
                                            En el último año, probablemente hayas tenido que adaptarte a nuevas formas de
                                            vida y
                                            laboral.
                                        </p>
                                    </div>
                                    <!--end::Description-->

                                    <!--begin::Summary-->
                                    <div class="d-flex flex-stack pt-8">
                                        <span class="text-muted fw-semibold fs-6 pe-2">34, Soho Avenue, Tokio</span>

                                        <a href="#" class="btn btn-sm btn-light">Registrase</a>
                                    </div>
                                    <!--end::Summary-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Item-->

                            <!--begin::Item-->
                            <div class="carousel-item active">
                                <!--begin::Wrapper-->
                                <div class="carousel-wrapper">
                                    <!--begin::Description-->
                                    <div class="d-flex flex-column flex-grow-1">
                                        <a href="#" class="fw-bold text-gray-900 text-hover-primary">
                                            Actualización de la política de seguridad
                                        </a>

                                        <p class="text-gray-600 fs-6 fw-semibold pt-3 mb-0">
                                            A medida que nos acercamos a un año de trabajo remoto, queríamos echar una
                                            mirada atrás.
                                            y comparta algunas formas en que equipos de todo el mundo han colaborado de
                                            manera efectiva.
                                        </p>
                                    </div>
                                    <!--end::Description-->

                                    <!--begin::Summary-->
                                    <div class="d-flex flex-stack pt-8">
                                        <span class="badge badge-light-primary fs-7 fw-bold me-2">Oct 05, 2021</span>

                                        <a href="#"
                                            class="btn btn-light btn-sm btn-color-muted fs-7 fw-bold px-5">Explorar</a>
                                    </div>
                                    <!--end::Summary-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Item-->

                            <!--begin::Item-->
                            <div class="carousel-item">
                                <!--begin::Wrapper-->
                                <div class="carousel-wrapper">
                                    <!--begin::Description-->
                                    <div class="d-flex flex-column flex-grow-1">
                                        <a href="#" class="fw-bold text-gray-900 text-hover-primary">
                                            Documento de términos de uso
                                        </a>

                                        <p class="text-gray-600 fs-6 fw-semibold pt-3 mb-0">
                                            Hoy estamos emocionados de compartir una certificación increíble.
                                            oportunidad que está diseñada para enseñarte todo
                                        </p>
                                    </div>
                                    <!--end::Description-->

                                    <!--begin::Summary-->
                                    <div class="d-flex flex-stack pt-8">
                                        <span class="badge badge-light-primary fs-7 fw-bold me-2">Nov 10, 2021</span>

                                        <a href="#"
                                            class="btn btn-light btn-sm btn-color-muted fs-7 fw-bold px-5">Descubrir</a>
                                    </div>
                                    <!--end::Summary-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Carousel inner-->
                    </div>
                    <!--end::Carousel-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Security guidelines-->
        </div>
        <!--end::Col-->
    </div>

    <div class="card mb-5 mb-xl-10">
        <!--begin::Card header-->
        <div class="card-header">
            <!--begin::Heading-->
            <div class="card-title">
                <h3>Sesiones de inicio de sesión</h3>
            </div>
            <!--end::Heading-->
        </div>
        <!--end::Card header-->

        <!--begin::Card body-->
        <div class="card-body p-0">
            <div class="m-5">
                <!--begin::Table wrapper-->
                <div class="table-responsive">
                    <!--begin::Table-->
                    <table id="tablaAccesos" class="table align-middle table-row-bordered table-row-solid gy-4 gs-9">
                        <!--begin::Thead-->
                        <thead class="border-gray-200 fs-5 fw-semibold bg-lighten">
                            <tr>
                                <th class="text-center all">#</th>
                                <th class="text-center all">Usuario</th>
                                <th class="text-center all">Tipo</th>
                                <th class="text-center all">Localización</th>
                                <th class="text-center all">Dispositivo</th>
                                <th class="text-center all">Dirección IP</th>
                                <th class="text-center all">Estado</th>
                                <th class="text-center all">Tiempo</th>
                                <th class="text-center all">Fecha Ingreso</th>
                            </tr>
                        </thead>
                        <!--end::Thead-->

                        <!--begin::Tbody-->
                        <tbody class="fw-6 fw-semibold text-gray-600">
                            {{-- <tr>
                                <td>
                                    <a href="#" class="text-hover-primary text-gray-600">USA(5)</a>
                                </td>
    
                                <td>
                                    <span class="badge badge-light-success fs-7 fw-bold">OK</span>
                                </td>
    
                                <td>Chrome - Windows</td>
    
                                <td>236.125.56.78</td>
    
                                <td>2 mins ago</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#" class="text-hover-primary text-gray-600">United Kingdom(10)</a>
                                </td>
    
                                <td>
                                    <span class="badge badge-light-success fs-7 fw-bold">OK</span>
                                </td>
    
                                <td>Safari - Mac OS</td>
    
                                <td>236.125.56.78</td>
    
                                <td>10 mins ago</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#" class="text-hover-primary text-gray-600">Norway(-)</a>
                                </td>
    
                                <td>
                                    <span class="badge badge-light-danger fs-7 fw-bold">ERR</span>
                                </td>
    
                                <td>Firefox - Windows</td>
    
                                <td>236.125.56.10</td>
    
                                <td>20 mins ago</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#" class="text-hover-primary text-gray-600">Japan(112)</a>
                                </td>
    
                                <td>
                                    <span class="badge badge-light-success fs-7 fw-bold">OK</span>
                                </td>
    
                                <td>iOS - iPhone Pro</td>
    
                                <td>236.125.56.54</td>
    
                                <td>30 mins ago</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#" class="text-hover-primary text-gray-600">Italy(5)</a>
                                </td>
    
                                <td>
                                    <span class="badge badge-light-warning fs-7 fw-bold">WRN</span>
                                </td>
    
                                <td>Samsung Noted 5- Android</td>
    
                                <td>236.100.56.50</td>
    
                                <td>40 mins ago</td>
                            </tr> --}}
                        </tbody>
                        <!--end::Tbody-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Table wrapper-->
            </div>
        </div>
        <!--end::Card body-->
    </div>
@endsection

@section('scripts')
    <script src="{{ mix('js/sistema/accesos.js') }}"></script>
    <script src="{{ asset('assets/js/custom/account/security/license-usage.js') }}"></script>
    <script src="{{ asset('assets/js/custom/account/security/security-summary.js') }}"></script>
@endsection
