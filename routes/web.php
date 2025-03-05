<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\MatriculaController;

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

//Route::get('/matricula', [MatriculaController::class, 'index'])->name('matricula.proceso');
Route::get('/matricula/registro', [MatriculaController::class, 'registro'])->name('matricula.registro');
Route::post('/matricula/registro', [MatriculaController::class, 'store'])->name('matricula.store');

require __DIR__.'/auth.php';
