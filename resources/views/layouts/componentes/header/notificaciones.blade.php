<div class="d-flex align-items-center ms-6 mt-1">
    <div class="btn btn-icon btn-circle btn-color-primary btn-active-color-primary btn-custom shadow-sm bg-body" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" data-kt-menu-flip="bottom">
        <span class="svg-icon svg-icon-1">
            <i class="far fa-bell fs-1"></i>
        </span>
        @if ($cantidad)
            <span class="translate-middle badge badge-circle badge-primary" style="position: absolute; top: 3rem;">{{$cantidad ?? 0}}</span>
        @endif
    </div>
    <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true">
        <div class="d-flex flex-column bgi-no-repeat rounded-top" style="background-image:url({{asset('assets/media//misc/pattern-2.jpg')}})">
            <h3 class="text-white fw-bold px-9 mt-10 mb-6">
                <span class="ps-3">{{$cantidad ?? 0}}</span>
                Notificaciones
            </h3>
            <ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-bold px-9">
                <li class="nav-item">
                    <a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active" data-bs-toggle="tab" href="#kt_topbar_notifications_1">
                        <i class="far fa-eye-slash text-white m-2"></i>
                        Sin leer
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_2">
                        <i class="far fa-eye text-white m-2"></i>
                        Leidos
                    </a>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="kt_topbar_notifications_1" role="tabpanel">
                <div class="scroll-y mh-325px my-5 px-8">
                    @foreach ($unreadNotifications as $notification)
                        <div class="d-flex flex-stack py-4">
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-35px me-4">
                                    <span class="symbol-label bg-light-{{$notification->data['color'] ?? 'primary'}}">
                                        <span class="svg-icon svg-icon-2 svg-icon-{{$notification->data['color'] ?? 'primary'}}">
                                            <i class="{{$notification->data['icono'] ?? 'far fa-bell' }} text-{{$notification->data['color'] ?? 'primary'}} fs-1"></i>
                                        </span>
                                    </span>
                                </div>
                                <div class="mb-0 me-2">
                                    <a href="{{route('notificaciones.marcarNotificacion', ['notificacion' => $notification->id])}}" class="fs-6 text-gray-800 text-hover-{{$notification->data['color'] ?? 'primary'}} fw-bolder">{{$notification->data['titulo'] ?? 'N/A'}}</a>
                                    {{-- <a href="{{$notification->data['ruta'] ?? '#'}}" class="fs-6 text-gray-800 text-hover-{{$notification->data['color'] ?? 'primary'}} fw-bolder">{{$notification->data['titulo'] ?? 'N/A'}}</a> --}}
                                    <div class="text-gray-400 fs-7">{{$notification->data['mensaje'] ?? 'N/A'}}</div>
                                </div>
                            </div>
                            <span class="badge badge-light fs-8">{{ calcularDiferenciaDeTiempo($notification->created_at) }}</span>
                        </div>
                    @endforeach
                </div>
                <div class="py-3 text-center border-top">
                    <a href="#" class="btn btn-color-gray-600 btn-active-color-primary" id="btnMarcarNotificaciones">
                        <i class="far fa-eye"></i>
                        Marcar como leidos
                        <span class="svg-icon svg-icon-5">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <rect fill="#000000" opacity="0.5" transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)" x="7.5" y="7.5" width="2" height="9" rx="1" />
                                    <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                </g>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
            <div class="tab-pane fade" id="kt_topbar_notifications_2" role="tabpanel">
                <div class="scroll-y mh-325px my-5 px-8">
                    @foreach ($notifications as $notification)
                        <div class="d-flex flex-stack py-4">
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-35px me-4">
                                    <span class="symbol-label bg-light-{{$notification->data['color'] ?? 'primary'}}">
                                        <span class="svg-icon svg-icon-2 svg-icon-{{$notification->data['color'] ?? 'primary'}}">
                                            <i class="{{$notification->data['icono'] ?? 'far fa-bell' }} text-{{$notification->data['color'] ?? 'primary'}} fs-1"></i>
                                        </span>
                                    </span>
                                </div>
                                <div class="mb-0 me-2">
                                    <a href="{{$notification->data['ruta'] ?? '#'}}" class="fs-6 text-gray-800 text-hover-{{$notification->data['color'] ?? 'primary'}} fw-bolder">{{$notification->data['titulo'] ?? 'N/A'}}</a>
                                    <div class="text-gray-400 fs-7">{{$notification->data['mensaje'] ?? 'N/A'}}</div>
                                </div>
                            </div>
                            <span class="badge badge-light fs-8">{{ calcularDiferenciaDeTiempo($notification->created_at) }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>