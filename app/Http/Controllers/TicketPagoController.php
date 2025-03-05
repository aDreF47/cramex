<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketPagoController extends Controller
{
    public function facturacion()
    {
        return view('pages.ticket-pago')->with('etapa', 1);
    }

    public function transferencia()
    {
        return view('pages.ticket-pago')->with('etapa', 2);
    }

    public function confirmacion()
    {
        return view('pages.ticket-pago')->with('etapa', 3);
    }
}
