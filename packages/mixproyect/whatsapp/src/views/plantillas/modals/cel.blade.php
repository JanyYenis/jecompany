<div class="mobile-preview-franco"
    style="height: 566px; width: 281px; margin: 0px auto; z-index: 5; position: relative;">
    <div id="smartphone_id" class="content" style="overflow: auto; transform: translate(-38px, -103px) scale(0.7); width: 357px;
        margin: 0px auto; height: 770px; border-radius: 25px; z-index: 1; position: relative;">
        <div class="page">
            <div class="marvel-device nexus5">
                <div class="top-bar"></div>
                <div class="sleep"></div>
                <div class="volume"></div>
                <div class="camera"></div>
                <div class="screen">
                    <div class="screen-container">
                        <div class="status-bar">
                            <div class="time ml-3" style="float: left; font-size: 16px;">
                                <a style="color: white;">{{ date('H:m') }}</a>
                            </div>
                            <div class="dynamic-island" style="width: 100px; height: 16px; background: black; border-radius: 50px;
                                float: left; position: relative; top: 35%; transform: translateY(-30%); margin: 0px 0px 0px 8px;
                                font-weight: 600; left: 52px;">
                            </div>
                            <div class="battery">
                                <i class="fas fa-battery-full mr-3" style="font-size: 20px;"></i>
                            </div>
                        </div>
                        <div class="chat">
                            <div class="chat-container">
                                <div class="user-bar">
                                    <div class="avatar">
                                        <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPCFET0NUWVBFIHN2ZyAgUFVCTElDICctLy9XM0MvL0RURCBTVkcgMS4xLy9FTicgICdodHRwOi8vd3d3LnczLm9yZy9HcmFwaGljcy9TVkcvMS4xL0RURC9zdmcxMS5kdGQnPgo8c3ZnIHdpZHRoPSI0MDFweCIgaGVpZ2h0PSI0MDFweCIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAzMTIuODA5IDAgNDAxIDQwMSIgdmVyc2lvbj0iMS4xIiB2aWV3Qm94PSIzMTIuODA5IDAgNDAxIDQwMSIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGcgdHJhbnNmb3JtPSJtYXRyaXgoMS4yMjMgMCAwIDEuMjIzIC00NjcuNSAtODQzLjQ0KSI+Cgk8cmVjdCB4PSI2MDEuNDUiIHk9IjY1My4wNyIgd2lkdGg9IjQwMSIgaGVpZ2h0PSI0MDEiIGZpbGw9IiNFNEU2RTciLz4KCTxwYXRoIGQ9Im04MDIuMzggOTA4LjA4Yy04NC41MTUgMC0xNTMuNTIgNDguMTg1LTE1Ny4zOCAxMDguNjJoMzE0Ljc5Yy0zLjg3LTYwLjQ0LTcyLjktMTA4LjYyLTE1Ny40MS0xMDguNjJ6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8cGF0aCBkPSJtODgxLjM3IDgxOC44NmMwIDQ2Ljc0Ni0zNS4xMDYgODQuNjQxLTc4LjQxIDg0LjY0MXMtNzguNDEtMzcuODk1LTc4LjQxLTg0LjY0MSAzNS4xMDYtODQuNjQxIDc4LjQxLTg0LjY0MWM0My4zMSAwIDc4LjQxIDM3LjkgNzguNDEgODQuNjR6IiBmaWxsPSIjRkZGRkZGIi8+CjwvZz4KPC9zdmc+Cg=="
                                            alt="Avatar">
                                    </div>
                                    <div class="name">
                                        <span>+{{ $numeroTel }}</span>
                                        <span class="status">En linea</span>
                                    </div>
                                    <div class="actions more">
                                        <i class="fas fa-ellipsis-v text-white fs-1"></i>
                                    </div>
                                    <div class="actions">
                                        <i class="fas fa-phone-alt text-white fs-1"></i>
                                    </div>
                                </div>
                                <div class="conversation">
                                    <div class="conversation-container">
                                        <div class="message sent">
                                            @if ($header && $header == 'IMAGE')
                                                <div class="image-container imagenCampana">
                                                    <img src="{{$header_contenido}}" class="img-fluid rounded thumbnail-image imgCampana"
                                                        style="max-width: 100%; min-width: 100%;">
                                                </div>
                                            @endif
                                            @if ($header && $header == 'VIDEO')
                                                <div class="">
                                                    <iframe src="{{$header_contenido}}" frameborder="0" 
                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media;
                                                        gyroscope; picture-in-picture" allowfullscreen autoplay="false"
                                                        style="max-width: 100%; min-width: 100%;"></iframe>
                                                </div>
                                            @endif
                                            @if ($header && $header == 'DOCUMENT')
                                                <div class="" style="background-color: #ffff; padding: 1rem; margin-bottom: 1rem; border-radius: 0.2rem;">
                                                    <a href="{{$header_contenido}}" class="text-info fs-3">
                                                        <i class="fs-1 las la-cloud-download-alt text-info"></i>
                                                        Descargar Documento
                                                    </a>
                                                </div>
                                            @endif
                                            <span class="contenidocampana">{!! html_entity_decode(nl2br($contenido)) !!}</span>
                                            <span class="metadata">
                                                <span class="time"></span>
                                                <span class="tick">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="15" id="msg-dblcheck-ack" x="2063" y="2076">
                                                        <path
                                                            d="M15.01 3.316l-.478-.372a.365.365 0 0 0-.51.063L8.666 9.88a.32.32 0 0 1-.484.032l-.358-.325a.32.32 0 0 0-.484.032l-.378.48a.418.418 0 0 0 .036.54l1.32 1.267a.32.32 0 0 0 .484-.034l6.272-8.048a.366.366 0 0 0-.064-.512zm-4.1 0l-.478-.372a.365.365 0 0 0-.51.063L4.566 9.88a.32.32 0 0 1-.484.032L1.892 7.77a.366.366 0 0 0-.516.005l-.423.433a.364.364 0 0 0 .006.514l3.255 3.185a.32.32 0 0 0 .484-.033l6.272-8.048a.365.365 0 0 0-.063-.51z"
                                                            fill="#4fc3f7">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </span>
                                            @if ($boton)
                                                <div class="separator my-2 border-light"></div>
                                                <div class="">
                                                    <div class="d-flex justify-content-center">
                                                        <a href="{{$boton_url}}" disabled>
                                                            <i class="fs-1 fas fa-external-link-alt text-primary"></i>
                                                            {{$boton}}
                                                        </a>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div
                                        style="height: 61px; background: rgb(255, 255, 255); padding-top: 6px; position: relative; top: -6px; border-radius: 40px;">
                                        <div class="conversation-compose">
                                            <div class="emoji">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    id="smiley" x="3147" y="3209">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M9.153 11.603c.795 0 1.44-.88 1.44-1.962s-.645-1.96-1.44-1.96c-.795 0-1.44.88-1.44 1.96s.645 1.965 1.44 1.965zM5.95 12.965c-.027-.307-.132 5.218 6.062 5.55 6.066-.25 6.066-5.55 6.066-5.55-6.078 1.416-12.13 0-12.13 0zm11.362 1.108s-.67 1.96-5.05 1.96c-3.506 0-5.39-1.165-5.608-1.96 0 0 5.912 1.055 10.658 0zM11.804 1.01C5.61 1.01.978 6.034.978 12.23s4.826 10.76 11.02 10.76S23.02 18.424 23.02 12.23c0-6.197-5.02-11.22-11.216-11.22zM12 21.355c-5.273 0-9.38-3.886-9.38-9.16 0-5.272 3.94-9.547 9.214-9.547a9.548 9.548 0 0 1 9.548 9.548c0 5.272-4.11 9.16-9.382 9.16zm3.108-9.75c.795 0 1.44-.88 1.44-1.963s-.645-1.96-1.44-1.96c-.795 0-1.44.878-1.44 1.96s.645 1.963 1.44 1.963z"
                                                        fill="#7d8489"></path>
                                                </svg>
                                            </div>
                                            <input name="input" placeholder="Mensaje" disabled="disabled"
                                                class="input-msg">
                                            <div class="photo">
                                                <i class="fas fa-camera"></i>
                                            </div>
                                            <button class="send" style="cursor: initial;">
                                                <div class="circle">
                                                    <i class="fas fa-paper-plane ml-0 mr-1 text-white"></i>
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
