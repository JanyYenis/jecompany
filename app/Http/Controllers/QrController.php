<?php

namespace App\Http\Controllers;

use App\Exceptions\ErrorException;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrController extends Controller
{
    public function index()
    {
        return view('qrs.index');
    }

    public function generarQr(Request $request)
    {
        $url = $request->input('url');
        // $info['QrCode'] = QrCode::size(100)->generate($url);
        // $info['QrCode'] = $info['QrCode'] = QrCode::format('png')
        $info['QrCode'] = $info['QrCode'] = QrCode::size(500)
            ->errorCorrection('H')
            // ->merge('https://img.freepik.com/vector-gratis/diseno-logotipo-degradado-colorido-letra_474888-2309.jpg?size=338&ext=jpg&ga=GA1.1.1687694167.1714867200&semt=ais', 0.5, true)
            // ->merge(asset('img/fondo.jpg'), 0.5, true)
            ->color(255, 0, 0)
            ->backgroundColor(255, 255, 255)
            ->generate($url);

        $respuesta["estado"] = "success";
        $respuesta["mensaje"] = "Se genero el QR correctamente.";
        $respuesta['html'] = view("qrs.qr", $info)->render();
    
        return response()->json($respuesta);
    }
}
