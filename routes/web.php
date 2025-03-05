<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\TicketPagoController;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/matricula', function () {
    return view('pages.matricula');
})->name('matricula');

Route::get('/nosotros', function () {
    return view('pages.nosotros');
})->name('nosotros');

Route::get('/talleres', function () {
    return view('pages.talleres');
})->name('talleres');

Route::get('/servicios', function () {
    return view('pages.servicios');
})->name('servicios');

Route::get('/novedades', function () {
    return view('pages.novedades');
})->name('novedades');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/usuarios', [UsuarioController::class, 'products'])->name('usuarios.products');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/products', [ProductoController::class, 'productos'])->name('products.productos');
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware(['auth'])->group(function () {
    Route::get('/carrito', [CarritoController::class, 'index'])->name('carrito.index');
    // Rutas del proceso de pago
    Route::get('/ticket-pago', [TicketPagoController::class, 'facturacion'])->name('procesopago');
    Route::get('/ticket-pago/transferencia', [TicketPagoController::class, 'transferencia'])->name('ticket.transferencia');
    Route::get('/ticket-pago/confirmacion', [TicketPagoController::class, 'confirmacion'])->name('ticket.confirmacion');

    Route::post('/carrito/agregar', [CarritoController::class, 'agregar'])->name('carrito.agregar');
    Route::delete('/carrito/eliminar/{id}', [CarritoController::class, 'eliminar'])->name('carrito.eliminar');
    Route::delete('/carrito/vaciar', [CarritoController::class, 'vaciar'])->name('carrito.vaciar');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/carrito', function () {
        return view('carrito');
    })->name('carrito.index');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/ticket', [CarritoController::class, 'generarTicket'])->name('ticket.pago');
});

Route::get('/ticket', [TicketController::class, 'mostrarTicket'])->name('ticket.pago');
require __DIR__.'/auth.php';
