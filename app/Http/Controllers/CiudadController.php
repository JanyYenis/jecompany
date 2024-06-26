<?php

namespace App\Http\Controllers;

use App\Models\Ciudad;
use App\Http\Requests\StoreCiudadRequest;
use App\Http\Requests\UpdateCiudadRequest;
use App\Models\Pais;

class CiudadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCiudadRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Ciudad $ciudad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ciudad $ciudad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCiudadRequest $request, Ciudad $ciudad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ciudad $ciudad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function buscar(Pais $pais)
    {
        $ciudades = Ciudad::select("id", "nombre as text")
            ->where('id_pais', $pais->id)
            ->get();
        
        return [
            "estado" => "success",
            "ciudades" => $ciudades,
            "mensaje" => "Se han cargado las ciudades correctamente"
        ];
    }
}
