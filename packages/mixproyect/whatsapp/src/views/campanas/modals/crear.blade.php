<div class="modal fade" tabindex="-1" id="modalCrearCampana">
    <form id="formCrearCampana">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title offset-lg-4 text-verdoso mulish">Crear Campaña</h5>
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2 btnCerrarModal" data-bs-dismiss="modal" aria-label="Close">
                        <span class="svg-icon svg-icon-2x">
                        <i class="las la-times fs-1"></i>
                    </span>
                    </div>
                </div>
    
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="form-floating row mb-7">
                                <select name="etiquetas[]" id="selectEtiqueta" class="form-control" data-control="select2" data-placeholder="Etiqueta" data-allow-clear="true" required data-dropdown-parent="#modalCrearCampana" multiple>
                                    <option></option>
                                    @foreach ($etiquetas as $etiqueta)
                                        <option value="{{$etiqueta->id}}">{{$etiqueta->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="row mb-7">
                                <select name="id_plantilla" id="selectPlantilla" class="form-control" data-control="select2" 
                                    data-placeholder="Plantilla" required data-dropdown-parent="#modalCrearCampana" data-allow-clear="true">
                                    <option></option>
                                    @foreach ($plantillas as $plantilla)
                                        <option value="{{$plantilla['id']}}">{{$plantilla['name']." - ".$plantilla['BODY']['text']}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="input-group mb-3 d-none" id="divInputFile">
                                <input type="file" class="form-control" id="inputFile" accept="image/png" name="archivo">
                            </div>
                            <div class="row mb-7" id="divVariables">
                            </div>
                            <div class="divOpciones">
                                <div class="col-lg-12 mb-7">
                                    <div class="form-check form-check-inline col-lg-5">
                                        <input class="form-check-input" type="radio" value="1" name="accion" id="accioInmediatamente" checked>
                                        <label class="form-check-label" for="accioInmediatamente">
                                            Inmediatamente
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline col-lg-5">
                                        <input class="form-check-input" type="radio" value="2" name="accion" id="accionProgramar">
                                        <label class="form-check-label" for="accionProgramar">
                                            Programar
                                        </label>
                                    </div>
                                </div>
                                <div class="row d-none" id="fechas">
                                    <div class="calendario offset-lg-5">
                                        <img src="{{ mix('img/calendario.png')}}">
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="text" placeholder="DD/MM/AAA" id="fechaProgramacion" name="fecha_programacion" class="form-control">
                                    </div>
                                    <div class="col-lg-2">
                                        <input type="text" placeholder="00:00" id="horaProgramacion" name="hora_envio" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row seccionContactos d-none">
                                <div class="scroll-y me-n5 pe-5 h-200px h-lg-auto tablasScroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_header, #kt_toolbar, #kt_footer, #kt_chat_contacts_header" data-kt-scroll-wrappers="#kt_content, #kt_chat_contacts_body" data-kt-scroll-offset="5px" style="max-height: 410px;">
                                    <div class="table-responsive">
                                        <table border="1" class="table table-striped table-bordered" id="tablaContactos">
                                            <thead>
                                                <tr>
                                                    <th width="5%" class="text-center all">
                                                        <div class="form-check text-center">
                                                            <input class="form-check-input checkSeleccionarTodos" type="checkbox" value="" id="seleccionarTodos"/>
                                                        </div>
                                                    </th>
                                                    <th width="10%" class="text-center all">Identificación</th>
                                                    <th width="10%" class="text-center all">Nombre</th>
                                                    <th width="10%" class="text-center all">Etiqueta</th>
                                                    <th width="10%" class="text-center all">Telefono</th>
                                                </tr>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <!-- <h1>Hola</h1> -->
                            <div class="mobile-preview-franco" style="height: 566px; width: 281px; margin: 0px auto; z-index: 5; 
                                position: relative;">
                                <div id="smartphone_id" class="content" style="overflow: auto; 
                                    transform: translate(-38px, -103px) scale(0.7); width: 357px; margin: 0px auto; height: 770px; 
                                    border-radius: 25px; z-index: 1; position: relative;">
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
                                                            <a style="color: white;">{{date('H:m')}}</a>
                                                        </div>
                                                    <div class="dynamic-island" style="width: 100px; height: 16px; background: black; 
                                                        border-radius: 50px; float: left; position: relative; top: 35%; 
                                                        transform: translateY(-30%); margin: 0px 0px 0px 8px; font-weight: 600; 
                                                        left: 52px;"></div>
                                                    <div class="battery">
                                                        <i class="fas fa-battery-full mr-3" style="font-size: 20px;"></i>
                                                    </div>
                                                </div>
                                                <div class="chat">
                                                    <div class="chat-container">
                                                        <div class="user-bar">
                                                            <div class="avatar">
                                                                <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPCFET0NUWVBFIHN2ZyAgUFVCTElDICctLy9XM0MvL0RURCBTVkcgMS4xLy9FTicgICdodHRwOi8vd3d3LnczLm9yZy9HcmFwaGljcy9TVkcvMS4xL0RURC9zdmcxMS5kdGQnPgo8c3ZnIHdpZHRoPSI0MDFweCIgaGVpZ2h0PSI0MDFweCIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAzMTIuODA5IDAgNDAxIDQwMSIgdmVyc2lvbj0iMS4xIiB2aWV3Qm94PSIzMTIuODA5IDAgNDAxIDQwMSIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGcgdHJhbnNmb3JtPSJtYXRyaXgoMS4yMjMgMCAwIDEuMjIzIC00NjcuNSAtODQzLjQ0KSI+Cgk8cmVjdCB4PSI2MDEuNDUiIHk9IjY1My4wNyIgd2lkdGg9IjQwMSIgaGVpZ2h0PSI0MDEiIGZpbGw9IiNFNEU2RTciLz4KCTxwYXRoIGQ9Im04MDIuMzggOTA4LjA4Yy04NC41MTUgMC0xNTMuNTIgNDguMTg1LTE1Ny4zOCAxMDguNjJoMzE0Ljc5Yy0zLjg3LTYwLjQ0LTcyLjktMTA4LjYyLTE1Ny40MS0xMDguNjJ6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8cGF0aCBkPSJtODgxLjM3IDgxOC44NmMwIDQ2Ljc0Ni0zNS4xMDYgODQuNjQxLTc4LjQxIDg0LjY0MXMtNzguNDEtMzcuODk1LTc4LjQxLTg0LjY0MSAzNS4xMDYtODQuNjQxIDc4LjQxLTg0LjY0MWM0My4zMSAwIDc4LjQxIDM3LjkgNzguNDEgODQuNjR6IiBmaWxsPSIjRkZGRkZGIi8+CjwvZz4KPC9zdmc+Cg==" alt="Avatar">
                                                            </div>
                                                            <div class="name">
                                                                <span>+{{$numeroTel}}</span>
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
                                                                    <div class="image-container imagenCampana d-none">
                                                                        <img src="{{mix('img/defecto.png')}}" class="img-fluid rounded thumbnail-image imgCampana" style="max-width: 100%; min-width: 100%;">
                                                                    </div>
                                                                    <span class="contenidocampana">Mensaje</span>
                                                                    <span class="metadata">
                                                                        <span class="time"></span>
                                                                        <span class="tick">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" id="msg-dblcheck-ack" x="2063" y="2076">
                                                                                <path d="M15.01 3.316l-.478-.372a.365.365 0 0 0-.51.063L8.666 9.88a.32.32 0 0 1-.484.032l-.358-.325a.32.32 0 0 0-.484.032l-.378.48a.418.418 0 0 0 .036.54l1.32 1.267a.32.32 0 0 0 .484-.034l6.272-8.048a.366.366 0 0 0-.064-.512zm-4.1 0l-.478-.372a.365.365 0 0 0-.51.063L4.566 9.88a.32.32 0 0 1-.484.032L1.892 7.77a.366.366 0 0 0-.516.005l-.423.433a.364.364 0 0 0 .006.514l3.255 3.185a.32.32 0 0 0 .484-.033l6.272-8.048a.365.365 0 0 0-.063-.51z" fill="#4fc3f7">
                                                                                </path>
                                                                            </svg>
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div style="height: 61px; background: rgb(255, 255, 255); padding-top: 6px; position: relative; top: -6px; border-radius: 40px;">
                                                                <div class="conversation-compose">
                                                                    <div class="emoji">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" id="smiley" x="3147" y="3209">
                                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.153 11.603c.795 0 1.44-.88 1.44-1.962s-.645-1.96-1.44-1.96c-.795 0-1.44.88-1.44 1.96s.645 1.965 1.44 1.965zM5.95 12.965c-.027-.307-.132 5.218 6.062 5.55 6.066-.25 6.066-5.55 6.066-5.55-6.078 1.416-12.13 0-12.13 0zm11.362 1.108s-.67 1.96-5.05 1.96c-3.506 0-5.39-1.165-5.608-1.96 0 0 5.912 1.055 10.658 0zM11.804 1.01C5.61 1.01.978 6.034.978 12.23s4.826 10.76 11.02 10.76S23.02 18.424 23.02 12.23c0-6.197-5.02-11.22-11.216-11.22zM12 21.355c-5.273 0-9.38-3.886-9.38-9.16 0-5.272 3.94-9.547 9.214-9.547a9.548 9.548 0 0 1 9.548 9.548c0 5.272-4.11 9.16-9.382 9.16zm3.108-9.75c.795 0 1.44-.88 1.44-1.963s-.645-1.96-1.44-1.96c-.795 0-1.44.878-1.44 1.96s.645 1.963 1.44 1.963z" fill="#7d8489"></path>
                                                                        </svg>
                                                                    </div>
                                                                    <input name="input" placeholder="Mensaje" disabled="disabled" class="input-msg">
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
                        </div>
                        </div>
                    </div>
                </div>
    
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" id="btnSubmit" class="btn btn-primary">Crear</button>
                </div>
            </div>
        </div>
    </form>
</div>