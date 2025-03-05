<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrito;
use App\Http\Requests\StoreCarritoRequest;
use App\Http\Requests\UpdateCarritoRequest;
use App\Models\Producto;
use Illuminate\Support\Facades\Auth;
class CarritoController extends Controller
{
    public function index()
    {
        $carrito = Carrito::where('user_id', Auth::id())->with('producto')->get();
        return view('carrito.index', compact('carrito'));
    }
    public function generarTicket()
    {
        // Obtener los productos del carrito de la base de datos
        $carrito = Carrito::where('user_id', Auth::id())->with('producto')->get();

        // Si el carrito está vacío, redirigir a la página del carrito con un mensaje de error
        if ($carrito->isEmpty()) {
            return redirect()->route('carrito.index')->with('error', 'El carrito está vacío.');
        }

        // Guardar el carrito en la sesión para acceder en la vista del ticket
        session()->put('carrito', $carrito);

        // Redirigir a la página del ticket de pago
        return redirect()->route('ticket.pago');
    }

    public function agregar(Request $request)
    {
        $producto = Producto::findOrFail($request->producto_id);

        $item = Carrito::updateOrCreate(
            ['user_id' => Auth::id(), 'producto_id' => $producto->id],
            ['cantidad' => \DB::raw('cantidad + 1')]
        );

        return redirect()->route('carrito.index')->with('success', 'Producto agregado al carrito');
    }

    public function eliminar($id)
    {
        Carrito::where('user_id', Auth::id())->where('id', $id)->delete();
        return back()->with('success', 'Producto eliminado del carrito');
    }

    public function vaciar()
    {
        Carrito::where('user_id', Auth::id())->delete();
        return back()->with('success', 'Carrito vaciado');
    }
}
