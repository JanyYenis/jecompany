<?php

use App\Http\Controllers\Auth\OutlookController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuarioController;
use App\Models\Sistema\Acceso;
use App\Models\Sistema\Autenticacion;
use App\Models\Usuario;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Jenssegers\Agent\Agent;
use Laravel\Socialite\Facades\Socialite;
use Netflie\WhatsAppCloudApi\Message\Template\Component;
use Netflie\WhatsAppCloudApi\WhatsAppCloudApi;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
  return view('welcome');
});

Route::fallback(function () {
  return view('sistema.404');
});

Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('auth/user', function () {
  if (auth()->check()) {
    return response()->json([
      'authUser' => auth()->user(),
    ]);
  }

  return null;
});

// Auth Redes
Route::get('/login-google', function () {
  return Socialite::driver('google')->redirect();
})->name('login-google');

Route::get('/google-callback', function (Request $request) {
  $usuario = Socialite::driver('google')->user();

  $validarUsuario = Usuario::where([
    'email'  => $usuario?->email,
    'estado' => Usuario::ACTIVO,
  ])->first();

  if ($validarUsuario) {
    Autenticacion::updateOrCreate([
      'cod_usuario' => $validarUsuario->id,
      'external_auth' => 'google',
    ], [
      'external_id' => $usuario->id,
    ]);

    Auth::login($validarUsuario);

    $agent = new Agent();

    // Obteniendo la IP del cliente
    $ipAddress = $request->ip();

    // Obteniendo el sistema operativo del cliente
    $platform = $agent->platform();

    // Obteniendo el navegador del cliente
    $browser = $agent->browser();

    // Obteniendo la ubicación del cliente (esto requerirá un servicio de geolocalización de terceros)
    // $location = obtenerUbicacion($ipAddress);

    Acceso::create([
      'cod_usuario' => auth()->user()->id,
      'tipo' => Acceso::GOOGLE,
      'ip' => $ipAddress,
      'navegador' => $browser,
      'sistema' => $platform,
      'fecha_ingreso' => Carbon::now(),
    ]);

    return redirect(route('home'));
  } else {
    $agent = new Agent();

    // Obteniendo la IP del cliente
    $ipAddress = $request->ip();

    // Obteniendo el sistema operativo del cliente
    $platform = $agent->platform();

    // Obteniendo el navegador del cliente
    $browser = $agent->browser();

    // Obteniendo la ubicación del cliente (esto requerirá un servicio de geolocalización de terceros)
    // $location = obtenerUbicacion($ipAddress);

    Acceso::create([
      'tipo' => Acceso::GOOGLE,
      'ip' => $ipAddress,
      'navegador' => $browser,
      'sistema' => $platform,
      'fecha_ingreso' => Carbon::now(),
      'estado' => Acceso::ERROR,
    ]);
  }

  return redirect(route('login'));
});

Route::get('/login-outlook', [OutlookController::class, 'index'])->name('login-outlook');
Route::get('/outlook-callback', [OutlookController::class, 'redireccion'])->name('outlook-callback');

Route::get('/prueba', function () {
  $version = 'v19.0';
  $waba_id = '106202962472888';
  $app_id = '189706530645476';
  $phone_number_id = '110450798716118';
  $token = 'EAACsiX5e5eQBABB6ro8uBUpcW5MvEOlWXwXmEPXrF4GoeP7XfGyEuQoRgAuB0m2kv2ZBklFgeihPjRDqZBHY9FcqDErMptVhMO4QKrCHZBvMiWhQJTPp4F68M3F5ETaC1nBxTknyher3x1ZBGzqxTxC7xLPjoQ4nv4w3vH3ZC8XNgZCe8p7rLo';
  $whatsapp_cloud_api = new WhatsAppCloudApi([
    'from_phone_number_id' => $phone_number_id,
    'access_token' => $token,
    'graph_version' => $version,
  ]);

  $component_header = [];

  $component_body = [
    [
      'type' => 'text',
      'text' => '1234',
    ],
  ];

  $component_buttons = [
    [
      'type' => 'button',
      'sub_type' => 'url',
      'index' => 0,
      'parameters' => [
          [
              "type" => "text",
              "text" => "1234"
          ]
      ]
    ]
  ];

  $components = new Component($component_header, $component_body, $component_buttons);
  $whatsapp_cloud_api->sendTemplate('573152094191', 'dos_pasos', 'es_ES', $components); // Language is optional
});

Route::middleware(['2fa'])->group(function () {
  Route::get('/home', [HomeController::class, 'index'])->name('home');
  Route::post('/2fa', function () {
      return redirect(route('home'));
  })->name('2fa');
});

Route::post('/verify2FA', [UsuarioController::class, 'verify2FA'])->name('verify2FA');

Route::get('/video-llamada', function(){
  return view('chat.video-llamada');
});