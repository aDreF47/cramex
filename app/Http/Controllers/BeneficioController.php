<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;

class BeneficioController extends Controller
{
    public function index()
    {
        // Obtener los servicios que tienen "Beneficio" en su nombre
        $beneficios = Servicio::where('NombreServicio', 'like', '%Beneficio%')->get();
        
        return view('servicios', compact('beneficios'));
    }
}
