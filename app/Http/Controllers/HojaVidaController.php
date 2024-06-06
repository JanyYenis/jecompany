<?php

namespace App\Http\Controllers;

use App\Exceptions\ErrorException;
use App\Models\HojaVida;
use App\Http\Requests\StoreHojaVidaRequest;
use App\Http\Requests\UpdateHojaVidaRequest;
use App\Models\Direccion;
use App\Models\Pais;
use App\Models\Usuario;
use Barryvdh\DomPDF\Facade\Pdf;

class HojaVidaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuario = auth()->user();
        return view('hoja_vida.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $usuario = auth()->user();
        $hoja = HojaVida::firstWhere([
            'id_usuario' => $usuario->id,
            'estado' => 1,
        ]);
        $info['hoja'] = $hoja;
        $paises = Pais::where('estado', 1)->get();
        $tipoGenero = Usuario::darTipoGenero();
        $tipoDocumento = Usuario::darTipoDocumento();
        $info['paises'] = $paises;
        $info['generos'] = $tipoGenero?->conceptosActivos;
        $info['tipos_documentos'] = $tipoDocumento?->conceptosActivos;
        $info['direcciones'] = Direccion::with('usuario', 'infoTipoVivienda', 'infoEstadoSocieconomico', 'infoEstado')
            ->where('cod_usuario', $usuario->id)
            ->where('estado', Direccion::ACTIVO)
            ->get() ?? [];

        return view('hoja_vida.create', $info);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHojaVidaRequest $request)
    {
        $datos = $request->all();
        // dd($datos);
        $hoja = HojaVida::updateOrCreate([
            'id_usuario' => $datos['id_usuario'],
            'estado' => 1,
        ], $datos);

        if (!$hoja) {
            throw new ErrorException("No se ha creado la información.");
        }

        return [
            "estado" => "success",
            "mensaje" => "Se registro la información correctamente.",
        ];
    }

    /**
     * Display the specified resource.
     */
    public function show(HojaVida $hojaVida)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HojaVida $hojaVida)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHojaVidaRequest $request, HojaVida $hojaVida)
    {
        $datos = $request->all();
        $hoja = $hojaVida->update($datos);

        if (!$hoja) {
            throw new ErrorException("No se ha creado la información.");
        }

        return [
            "estado" => "success",
            "mensaje" => "Se registro la información correctamente.",
        ];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HojaVida $hojaVida)
    {
        //
    }

    public function descargar(Usuario $usuario)
    {
        // dd($usuario);
        $usuario->load(
            'hojaVidaActiva'
        );
        $hoja = $usuario->hojaVidaActiva;

        $data = [
            'usuario' => $usuario,
            'hoja' => $hoja,
        ];
        $pdf = Pdf::loadView('pdf.hoja_de_vida.index', $data);
        $fecha = date('d/m/Y');
        $pdf->setPaper('A4', 'portrait');
        // $pdf->setPaper('legal', 'landscape');
        $pdf->render();
    
        return $pdf->stream("Hoja de vida - {$fecha}.pdf");
    }
}
