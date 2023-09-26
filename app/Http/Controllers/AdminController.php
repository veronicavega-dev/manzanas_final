<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function perfil()
    {
        return view('admin.perfil');
    }

    public function registerMunicipio()
    {
        return view('admin.registroMunicipio');
    }
    public function registerManzana()
    {
        return view('admin.registroManzana');
    }
    public function registerServicio()
    {
        return view('admin.registroServicio');
    }
    public function registerEstablecimiento()
    {
        return view('admin.registroEstablecimiento');
    }
    public function registerCuidadora()
    {
        return view('admin.registroCuidadoras');
    }
}
