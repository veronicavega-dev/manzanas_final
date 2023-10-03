<?php

namespace App\Http\Controllers;

use App\Models\Manzana;
use App\Models\Municipio;
use Illuminate\Http\Request;

class httpManzana extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $municipio = Municipio::all();
        $busqueda=Manzana::get();
        return view('manzanas.index', compact('municipio'),['busqueda' => $busqueda]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validado = $request->validate([
            'nombre' => ['required'],
            'direccion'=>['required'],
            'localidad' => ['required'],
            'municipio_id' => ['required', 'exists:municipios,id']
        ]);
    
        Manzana::create($validado);
        $municipio = Municipio::all();
        $busqueda=Manzana::get();
    
        // Redirige a la página de inicio o muestra un mensaje de éxito
        return view('manzanas.index', compact('municipio'),['busqueda' => $busqueda]);
    }
    
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
