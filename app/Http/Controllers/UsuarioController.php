<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function products()
    {
        return view('usuarios.products'); // Carga la vista de usuarios
    }
}
