<?php

namespace App\Http\Controllers;

use App\Models\Municipio;


use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function perfil()
    {
        return view('admin.perfil');
    }


    // ----------------------------------------------admin perfil


    public function registerMunicipio()
    {
        $municipios = Municipio::orderBy('id', 'desc')->get();


        return view('admin.registroMunicipio', compact('municipios'));
    }

    public function guardarFormulario(Request $request)
    {
        $validado = $request->validate([
            'nombre' => ['required'],
        ]);

        Municipio::create($validado);

        return redirect()->route('admin.registroMunicipio');
    }

    public function filtrarEdit($post)
    {
        $infoMunicipio = Municipio::find($post);
        
        return view('admin.editarMunicipio', ['infoMunicipio' => $infoMunicipio]);
    }
    
    public function guardarCambios (Request $request, $info)
    {
        $validado=$request->validate([
            'nombre'=>['required'],
        ],[
            'nombre.required'=>'nombre requerido',
        ]);
        $info =Municipio::find($info);
        $info->update($validado);
        session()->flash('status','Post updated success!');
        return redirect()->route('admin.registroMunicipio', $info);

        }
    
    


    // ---------------------------------------- admin registro










    public function registerManzana()
    {
        return view('admin.registroManzana');
    }
    // ------------------------------------admin manzana
    public function registerServicio()
    {
        return view('admin.registroServicio');
    }
    // -------------------------------------------------- servicios-
    public function registerEstablecimiento()
    {
        return view('admin.registroEstablecimiento');
    }
    //  ----------------------------------------------- establecimiento-
    public function registerCuidadora()
    {
        return view('admin.registroCuidadoras');
    }
    // ----------------------------------------------
}
