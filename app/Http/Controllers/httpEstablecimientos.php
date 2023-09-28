<?php

namespace App\Http\Controllers;
use App\Models\Servicio;
use App\Models\Establecimiento;

use Illuminate\Http\Request;

class httpEstablecimientos extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $establecimiento = Establecimiento::get();
        $servicio = Servicio::all();

        return view('establecimientos.index', compact('servicio') ,['establecimiento' => $establecimiento]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

        // Valida los datos del formulario

        $validado = $request->validate([
            'nombre' => ['required'],
            'responsable' => ['required'],
            'direccion' => ['required'],
            'servicio_id' => ['required'],
        ]);
    
        Establecimiento::create($validado);
        $establecimiento = Establecimiento::get();
        $servicio = Servicio::get()->reverse();
    
        // // Redirige a la vista de índice con las variables necesarias
        return view('establecimientos.index', compact( 'servicio') ,['establecimiento' => $establecimiento]);

    
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
