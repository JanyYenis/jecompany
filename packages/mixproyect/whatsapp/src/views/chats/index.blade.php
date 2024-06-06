@extends('layouts.index')

@section('breadcrumb')
    <li class="breadcrumb-item text-dark">
        <a href="{{ route('usuarios.index') }}" class="text-dark">WhatsApp</a>
    </li>
@endsection

@section('css')
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/whatsapp/chats.css') }}">
@endsection

@section('content')
    {{-- <div class="green-background"></div> --}}
    <div class="wrap">
        <section class="left">
            <div class="profile">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1089577/user.jpg">
                <div class="icons">
                    <i class="fas fa-ellipsis-v me-2 fs-2qx" aria-hidden="true"></i>
                </div>
            </div>
            <div class="wrap-search">
                <div class="search">
                    <i class="fa fa-search fa fs-2qx" aria-hidden="true"></i>
                    <input type="text" class="input-search" placeholder="Buscar...">
                </div>
            </div>
            <div class="contact-list">
                <div class="contact" id="6"><img
                        src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1089577/contact7.JPG" alt="profilpicture">
                    <div class="contact-preview">
                        <div class="contact-text">
                            <h1 class="font-name">Cool Kids</h1>
                            <p class="font-preview">Mmh, lecker :) Freu mich!</p>
                        </div>
                    </div>
                    <div class="contact-time">
                        <p>17:54</p>
                    </div>
                </div>
                <div class="contact" id="5"><img
                        src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1089577/contact6.JPG" alt="profilpicture">
                    <div class="contact-preview">
                        <div class="contact-text">
                            <h1 class="font-name">Family</h1>
                            <p class="font-preview">Ich schätze so um 7 Uhr, aber melde mich noch!</p>
                        </div>
                    </div>
                    <div class="contact-time">
                        <p>17:44</p>
                    </div>
                </div>
                <div class="contact" id="4"><img
                        src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1089577/contact5.jpg" alt="profilpicture">
                    <div class="contact-preview">
                        <div class="contact-text">
                            <h1 class="font-name">Nicole Rammelmüller</h1>
                            <p class="font-preview">Ja klar!</p>
                        </div>
                    </div>
                    <div class="contact-time">
                        <p>17:41</p>
                    </div>
                </div>
                <div class="contact" id="3"><img
                        src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1089577/contact4.jpg" alt="profilpicture">
                    <div class="contact-preview">
                        <div class="contact-text">
                            <h1 class="font-name">Marina Pühringer</h1>
                            <p class="font-preview">Ja klar!</p>
                        </div>
                    </div>
                    <div class="contact-time">
                        <p>17:41</p>
                    </div>
                </div>
                <div class="contact" id="2"><img
                        src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1089577/contact3.jpg" alt="profilpicture">
                    <div class="contact-preview">
                        <div class="contact-text">
                            <h1 class="font-name">Papa</h1>
                            <p class="font-preview">Kein Problem ;)</p>
                        </div>
                    </div>
                    <div class="contact-time">
                        <p>17:31</p>
                    </div>
                </div>
                <div class="contact" id="1"><img
                        src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1089577/contact2.JPG" alt="profilpicture">
                    <div class="contact-preview">
                        <div class="contact-text">
                            <h1 class="font-name">Mama</h1>
                            <p class="font-preview">Bis Freitag :)</p>
                        </div>
                    </div>
                    <div class="contact-time">
                        <p>17:21</p>
                    </div>
                </div>
                <div class="contact" id="0"><img
                        src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1089577/contact1.jpg" alt="profilpicture">
                    <div class="contact-preview">
                        <div class="contact-text">
                            <h1 class="font-name">Linda Gahleitner</h1>
                            <p class="font-preview">Jap, ich bin um circa 15:00 auf der Landstraße :)</p>
                        </div>
                    </div>
                    <div class="contact-time">
                        <p>16:50</p>
                    </div>
                </div>
                <div class="contact" id="0"><img
                        src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1089577/contact1.jpg" alt="profilpicture">
                    <div class="contact-preview">
                        <div class="contact-text">
                            <h1 class="font-name">Jany Escobar</h1>
                            <p class="font-preview">Hola :)</p>
                        </div>
                    </div>
                    <div class="contact-time">
                        <p>16:50</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="right">
            <div class="chat-head">
                <img alt="profilepicture">
                <div class="chat-name">
                    <h1 class="font-name"></h1>
                    <p class="font-online"></p>
                </div>
                <i class="fa fa-search fa-lg fs-2qx" aria-hidden="true"></i>
                <i class="fa fa-paperclip fa-lg fs-2qx" aria-hidden="true"></i>
                <i class="fas fa-ellipsis-v fs-2qx" aria-hidden="true" id="show-contact-information"></i>
                <i class="fa fa-times fa-lg fs-2qx" aria-hidden="true" id="close-contact-information"></i>
            </div>
            <div class="wrap-chat">
                <div class="chat"></div>
                <div class="information"></div>
            </div>
            <div class="wrap-message">
                <i class="fa fa-smile-o fa-lg ms-2 fs-2qx" aria-hidden="true"></i>
                <div class="message">
                    <input type="text" class="input-message" placeholder="Mensaje...">
                </div>
                <i class="fa fa-microphone fa-lg me-2 fs-2qx" aria-hidden="true"></i>
            </div>
        </section>
    </div>
@endsection

@section('modal')
    @component('usuarios.modals.roles-permisos')
    @endcomponent
@endsection

@section('scripts')
    {{-- <script src="{{ mix('/js/usuarios/principal.js') }}"></script> --}}
    <script src="https://use.fontawesome.com/1c6f725ec5.js"></script>
@endsection
