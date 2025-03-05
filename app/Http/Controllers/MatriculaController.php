<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matricula;

class MatriculaController extends Controller
{
    // Vista principal de matrícula
    public function index()
    {
        return view('matricula.proceso');
    }

    // Vista del formulario de matrícula
    public function registro()
    {
        return view('matricula.registro');
    }

    // Guardar los datos del formulario en la BD
    public function store(Request $request)
    {
        // Validación de los datos
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'dni' => 'required|numeric|digits:8|unique:matriculas',
            'correo' => 'required|email|unique:matriculas',
            'telefono' => 'required|numeric',
            'grado' => 'required|string',
            'documento' => 'required|mimes:pdf,jpg,png|max:2048',
        ]);

        // Guardar archivo en storage
        $documentoPath = $request->file('documento')->store('documentos', 'public');

        // Guardar en la base de datos
        Matricula::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'dni' => $request->dni,
            'correo' => $request->correo,
            'telefono' => $request->telefono,
            'grado' => $request->grado,
            'documento' => $documentoPath,
        ]);

        return redirect()->route('matricula.proceso')->with('success', 'Registro exitoso. Te contactaremos pronto.');
    }
}
