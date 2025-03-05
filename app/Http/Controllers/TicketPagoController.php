<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketPagoController extends Controller
{
    public function mostrarTicket()
    {
       // Obtener el carrito desde la sesión
       $carrito = session()->get('carrito', []);
        
       return view('ticket-pago', compact('carrito'));
    }
}
