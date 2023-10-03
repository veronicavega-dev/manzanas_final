<?php

namespace App\Http\Controllers;
use App\Models\Cuidadora;
use App\Models\Servicio;


use Illuminate\Http\Request;

class httpCuidadorasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $busqueda = Cuidadora::get();
        $servicio = Servicio::all();

        //
        return view('cuidadoras.index', compact('servicio') , ['busqueda'=> $busqueda]);

    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create(Request $request)
    // {
    //     // Valida los datos del formulario
    //     $validado = $request->validate([
    //         'tipoDoc' => ['required'],
    //         'documento' => ['required'],
    //         'apellido' => ['required'],
    //         'telefono' => ['required'],
    //         'correo' => ['required'],
    //         'ciudad' => ['required'],
    //         'direccion' => ['required'],
    //         'ocupacion' => ['required'],
    //         'servicioInteres' => ['required'],
    //         'servicio_id' => ['required'],
    //     ]);

    //         return $validado;

    //     // // Intenta crear la cuidadora
    //     // try {
    //     //     Cuidadora::create($validado);
    //     //     $busqueda = Cuidadora::get();
    //     //     $servicio = Servicio::get()->reverse();
        
    //     //     // Redirige a la vista de índice con las variables necesarias
    //     //     return view('cuidadoras.index', compact('servicio'), ['busqueda' => $busqueda]);

    //     // } catch (\Exception $e) {
    //     //     // Si hay un error en la creación, puedes manejarlo aquí
    //     //     return redirect()->back()->withErrors(['error' => "Hubo un problema al crear la cuidadora$e"]);
    //     // }
    

    // }

    public function create(Request $request)
{
    // Valida los datos del formulario
    $validado = $request->validate([
        'tipoDoc' => ['required'],
        'documento' => ['required'],
        'apellido' => ['required'],
        'telefono' => ['required'],
        'correo' => ['required', 'email'], // Agrega una validación de correo electrónico si es necesario
        'ciudad' => ['required'],
        'direccion' => ['required'],
        'ocupacion' => ['required'],
        'servicioInteres' => ['required'],
        'servicio_id' => ['required', 'exists:servicios,id'], // Asegura que el servicio_id exista en la tabla "servicios"
    ]);

    // Una vez que los datos se han validado correctamente, puedes crear un nuevo registro en la base de datos
        Cuidadora::create($validado);
        $busqueda = Cuidadora::get();
         $servicio = Servicio::get()->reverse();
        
        //     // Redirige a la vista de índice con las variables necesarias
         return view('cuidadoras.index', compact('servicio'), ['busqueda' => $busqueda]);

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
