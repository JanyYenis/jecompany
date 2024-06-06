const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();

// JS
mix.js("resources/js/jquery-validator.init.js", "public/js/jquery-validator.init.js");

mix.js("resources/js/search.js", "public/js/search.js");

mix.js("resources/js/google2fa/principal.js", "public/js/google2fa/principal.js");

mix.js("resources/js/usuarios/principal.js", "public/js/usuarios/principal.js");
mix.js("resources/js/usuarios/editar.js", "public/js/usuarios/editar.js");

mix.js("resources/js/hoja_vida/principal.js", "public/js/hoja_vida/principal.js");

mix.js("resources/js/sistema/notificaciones.js", "public/js/sistema/notificaciones.js");
mix.js("resources/js/sistema/accesos.js", "public/js/sistema/accesos.js");

mix.js("resources/js/chat/principal.js", "public/js/chat/principal.js");
mix.js("resources/js/chat/videoLlamada.js", "public/js/chat/videoLlamada.js");

mix.js("resources/js/calendario/principal.js", "public/js/calendario/principal.js");

mix.js("resources/js/tareas/principal.js", "public/js/tareas/principal.js");

mix.js("resources/js/qr/principal.js", "public/js/qr/principal.js");

mix.js("resources/js/whatsapp/plantillas/principal.js", "public/js/whatsapp/plantillas/principal.js");
mix.js("resources/js/whatsapp/contactos/principal.js", "public/js/whatsapp/contactos/principal.js");
mix.js("resources/js/whatsapp/campanas/principal.js", "public/js/whatsapp/campanas/principal.js");

// ----------------------------------------------------------------------------------------------------
// Carpetas
mix.copyDirectory('resources/img', 'public/img');

// ----------------------------------------------------------------------------------------------------
// CSS
mix.styles(
    "resources/css/datatables.css",
    "public/css/datatables.css"
);

mix.styles(
    "resources/css/datatable-whatsking.css",
    "public/css/datatable-whatsking.css"
);

mix.styles(
    "resources/css/whatsapp/chats.css",
    "public/css/whatsapp/chats.css"
);

mix.styles(
    "resources/css/cel.css",
    "public/css/cel.css"
);