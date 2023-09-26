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
}
