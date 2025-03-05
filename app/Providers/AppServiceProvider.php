<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Carrito;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('*', function ($view) {
            if (Auth::check() && Session::has('carrito_temporal')) {
                $carrito = Session::get('carrito_temporal');
    
                foreach ($carrito as $producto_id => $cantidad) {
                    Carrito::updateOrCreate(
                        ['user_id' => Auth::id(), 'producto_id' => $producto_id],
                        ['cantidad' => \DB::raw("cantidad + $cantidad")]
                    );
                }
    
                Session::forget('carrito_temporal');
            }
        });
    }
}
