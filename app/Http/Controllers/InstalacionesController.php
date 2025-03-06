<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClienteServicio;

class InstalacionesController extends Controller
{
    public function reservar(Request $request)
    {
        // Validación de datos
        $request->validate([
            'nombre' => 'required|string|max:255',
            'correo' => 'required|email|max:255',
            'telefono' => 'required|string|max:15',
            'fecha' => 'required|date',
            'hora' => 'required',
            'espacio' => 'required|string',
            'motivo' => 'required|string|max:500',
        ]);

        // Definir costos por espacio
        $costos = [
            'gimnasio' => 50.00,
            'aula-multiuso' => 30.00,
            'cancha' => 40.00,
            'auditorio' => 80.00,
        ];

        // Obtener el costo según el espacio seleccionado
        $costoReserva = isset($costos[$request->espacio]) ? $costos[$request->espacio] : 0;

        // Verificar si el usuario está autenticado
        $idCliente = auth()->check() ? auth()->user()->id : null;

        // Guardar en la base de datos
        ClienteServicio::create([
            'idCliente' => $idCliente, // Permitir NULL si es un cliente externo
            'idServicio' => 1, // Asigna un ID de servicio para el uso de instalaciones
            'FechaInicio' => $request->fecha,
            'FechaFin' => $request->fecha, // Si es por un solo día
            'Costo' => $costoReserva, // Se almacena el costo automático
            'Captura' => json_encode([
                'hora' => $request->hora,
                'espacio' => $request->espacio,
                'motivo' => $request->motivo,
                'nombre' => $request->nombre,
                'correo' => $request->correo,
                'telefono' => $request->telefono,
            ]),
            'Penalidad' => 0,
            'FlagPago' => 0, // Indica que aún no se ha pagado, si aplica
        ]);

        return back()->with('success', 'Reserva realizada con éxito. Costo: S/ ' . number_format($costoReserva, 2));
    }
}
