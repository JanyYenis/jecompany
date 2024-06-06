<!--begin::Card header-->
<div class="card-header" id="kt_chat_messenger_header">
    <!--begin::Title-->
    <div class="card-title">
        <!--begin::User-->
        <div class="d-flex justify-content-center flex-column me-3 mt-3">
            <div class="symbol symbol-35px symbol-circle ">
                @if ($contacto?->foto)
                    <img src="{{ $contacto?->foto ? asset($contacto?->foto) : asset('assets/media/avatars/150-2.jpg')}}" alt="metronic" />
                @else
                    <span class="symbol-label bg-light-info text-info fs-6 fw-bolder">{{$contacto->nombre[0]}}</span>
                @endif
                <a href="#" class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1">
                    {{$contacto->nombre_completo}}
                </a>
            </div>
            <div class="mb-0 mt-2 lh-1">
                <span class="badge badge-danger badge-circle w-10px h-10px me-1 iconEstado"></span>
                <span class="fs-7 fw-semibold text-muted textoEstado">Inactivo</span><br>
                <span class="fs-7 fw-semibold text-muted textoEscribiendo fst-italic d-none">Escribiendo...</span>
            </div>
        </div>
        <!--end::User-->
    </div>
    <!--end::Title-->
    <div class="d-flex align-items-center">
        <button class="btn btn-sm btn-icon btn-active-light-primary me-2">
            <i class="fas fa-video fs-1"></i>
        </button>
        <button class="btn btn-sm btn-icon btn-active-light-primary me-2">
            <i class="fas fa-phone-alt fs-1"></i>
        </button>
    </div>
</div>
<!--end::Card header-->

<!--begin::Card body-->
<div class="card-body" id="kt_chat_messenger_body" style="min-height: 29rem;">
    <!--begin::Messages-->
    <div id="espacioChat" class="scroll-y me-n5 pe-5 h-300px h-lg-auto" data-kt-element="messages" data-kt-scroll="true"
        data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
        data-kt-scroll-dependencies="#kt_header, #kt_app_header, #kt_app_toolbar, #kt_toolbar, #kt_footer, #kt_app_footer, #kt_chat_messenger_header, #kt_chat_messenger_footer"
        data-kt-scroll-wrappers="#kt_content, #kt_app_content, #kt_chat_messenger_body"
        data-kt-scroll-offset="5px" style="max-height: 327px;">

        <div class="seccionchat">
            @component('chat.mensaje')
                @slot('mensajes', $mensajes)
            @endcomponent
        </div>
    </div>
    <!--end::Messages-->
</div>
<!--end::Card body-->

<!--begin::Card footer-->
<div class="card-footer pt-4" id="kt_chat_messenger_footer">
    <form id="formMensaje" enctype="multipart/form-data">
        <input type="hidden" id="idContacto" name="id" value="{{$contacto->id}}">
        <input type="file" id="idArchivo" name="archivo" class="d-none">
        <!--begin::Input-->
        <textarea class="textInput form-control form-control-flush mb-3" name="mensaje" rows="1" placeholder="Mensaje"></textarea>
        <!--end::Input-->

        <!--begin:Toolbar-->
        <div class="d-flex flex-stack">
            <!--begin::Actions-->
            <div class="d-flex align-items-center me-2">
                <!--begin::Menu wrapper-->
                <div>
                    <button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-1" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-offset="30px, 30px">
                        <i class="fas fa-paperclip fs-3"></i>
                    </button>
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-auto min-w-300 mw-300px" data-kt-menu="true">
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#modalCapturarFoto">
                                <i class="fas fa-camera fs-3 me-2 text-danger"></i>
                                Camara
                            </a>
                        </div>
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3 btnGaleria">
                                <i class="far fa-image fs-3 me-2 text-info"></i>
                                Galeria
                            </a>
                        </div>
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3">
                                <i class="fas fa-headphones-alt fs-3 me-2 text-warning"></i>
                                Audio
                            </a>
                        </div>
                    </div>
                </div>
                <!--end::Dropdown wrapper-->
                <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="modal" data-bs-target="#modalCapturarFoto">
                    <i class="fas fa-camera fs-3">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </button>
            </div>
            <!--end::Actions-->

            <div class="">
                <!--begin::Send-->
                <button class="btn btn-primary" type="submit">
                    <i class="far fa-paper-plane fs-3"></i>
                </button>
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-microphone fs-3"></i>
                </button>
                <!--end::Send-->
            </div>
        </div>
    </form>
    <!--end::Toolbar-->
</div>
<!--end::Card footer-->