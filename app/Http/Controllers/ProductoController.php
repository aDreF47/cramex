<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
class ProductoController extends Controller
{
    public function productos()
    {
        $productos = Producto::all(); // Obtener todos los productos
        return view('products.productos', compact('productos'));
    }
}
