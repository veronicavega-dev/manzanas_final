<?php

namespace App\Http\Controllers;
use App\Models\Categoria;


use Illuminate\Http\Request;

class httpCategoriaServicios extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $busqueda = Categoria::get()->reverse();
        //
        return view('categoriaServicios.index', ['busqueda'=> $busqueda]);

    }

    /**
     * funcion  para crear la categoria  de servicio
     */
    public function create(Request $request)
    {
        
        $validado = $request->validate([
            'nombre' => ['required'],
        ]);

        Categoria::create($validado);

        // return redirect()->route('');
        return redirect()->route('categoria.index');
    }



    /**
     * funcion para editar la informacion
     */
    public function edit(string $id)
    {
        //filtrare la informacion que necesito

        $informacion=Categoria::find($id);

        return view('categoriaServicios.formEdit', ['informacion'=> $informacion]);


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validado=$request->validate([
            'nombre'=>['required'],
        ],[
            'nombre.required'=>'nombre requerido',
        ]);
        
        $info =Categoria::find($id);
        $info->update($validado);
        session()->flash('status','Post updated success!');
        return redirect()->route('categoria.index' , ['informacion'=> $info]);

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
