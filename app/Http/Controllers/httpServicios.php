<?php

namespace App\Http\Controllers;
use App\Models\Categoria;
use App\Models\Servicio;


use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class httpServicios extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $categorias = Categoria::all()->toArray();
    //     return view('servicios.index', compact('categorias'));
    // }
    
    public function index()
    {   
        $categorias = Categoria::all();
        $servicio = Servicio::get();
        return view('servicios.index', compact('categorias') ,['servicio' => $servicio]);
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // Valida los datos del formulario
        $validado = $request->validate([
            'nombre' => ['required'],
            'descripccion' => ['required'],
            'categoria_id' => ['required'],
        ]);
    
        Servicio::create($validado);
    
        $categorias = Categoria::all();
        $servicio = Servicio::get()->reverse();
    
        // Redirige a la vista de índice con las variables necesarias
        return view('servicios.index', compact('categorias', 'servicio'));
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
