<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('carritoStore', () => ({
                carrito: JSON.parse(localStorage.getItem('carrito')) || [],
                mostrarCarrito: false,

                agregarAlCarrito(producto) {
                    if (!producto.id || !producto.nombre || !producto.precio) {
                        console.error("Error: Producto sin ID, nombre o precio inválido", producto);
                        return;
                    }

                    let existe = this.carrito.find(p => p.id === producto.id);
                    if (existe) {
                        existe.cantidad += 1;
                    } else {
                        this.carrito.push({
                            id: producto.id,
                            nombre: producto.nombre,
                            precio: parseFloat(producto.precio),
                            imagen: producto.imagen ?? '',
                            cantidad: 1
                        });
                    }
                    this.guardarCarrito();
                },

                guardarCarrito() {
                    localStorage.setItem('carrito', JSON.stringify(this.carrito));
                },

                eliminarProducto(id) {
                    this.carrito = this.carrito.filter(p => p.id !== id);
                    this.guardarCarrito();
                },

                calcularTotal() {
                    return this.carrito.reduce((total, p) => total + (p.precio * p.cantidad), 0).toFixed(2);
                },


                generarTicket() {
                    alert("Generando ticket para: \n" + JSON.stringify(this.carrito, null, 2));
                    this.carrito = [];
                    this.guardarCarrito();
                }, 
                aumentarCantidad(id) {
                    let producto = this.carrito.find(p => p.id === id);
                    if (producto) {
                        producto.cantidad += 1;
                        this.guardarCarrito();
                    }
                },

                disminuirCantidad(id) {
                    let producto = this.carrito.find(p => p.id === id);
                    if (producto && producto.cantidad > 1) {
                        producto.cantidad -= 1;
                        this.guardarCarrito();
                    } else {
                        producto.cantidad = 1;
                    }
                }
            }));
        });
        </script>
    </body>
</html>
