<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            📚 Tienda del Colegio
        </h2>
    </x-slot>

    <div class="p-6 bg-white dark:bg-gray-800 shadow rounded-lg" x-data="carritoStore()">
        <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-4">
            🎉 Productos Destacados
        </h3>

            @php
        $imagenes = [
            'Cuaderno de Control' => 'libreta.png',
            'Libro - Matemáticas Avanzadas' => 'libromate3.png',
            'Uniforme escolar' => 'uniforme.png',
            'Cordon Policia Escolar' => 'cordonpe.png',
            'Libro - Historia del Perú' => 'librohp.png',
        ];
    @endphp

    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach($productos as $producto)
            <div class="bg-white dark:bg-gray-900 rounded-lg shadow-md p-4">
                <!-- Imagen del producto -->
                <img src="{{ asset('img/products/' . ($imagenes[$producto->NombreProducto] ?? 'libreta.png')) }}" 
                    alt="{{ $producto->NombreProducto }}" 
                    class="w-full h-40 object-cover rounded-md">
                
                <!-- Nombre del Producto -->
                <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mt-3">
                    {{ $producto->NombreProducto }}
                </h4>

                <!-- Descripción del Producto -->
                <p class="text-sm text-gray-600 dark:text-gray-400">
                    {{ $producto->Descripcion }}
                </p>

                <!-- Precio del Producto -->
                <p class="font-bold text-blue-600 dark:text-blue-400 mt-2">
                    S/ {{ number_format($producto->Precio, 2) }}
                </p>

                <button @click="agregarAlCarrito({
                    id: {{ $producto->IdProducto }},
                    nombre: '{{ $producto->NombreProducto }}',
                    precio: {{ $producto->Precio }},
                    imagen: '{{ asset('img/products/' . ($imagenes[$producto->NombreProducto] ?? 'libreta.png')) }}',
                    cantidad: 1
                })"
                class="mt-3 w-full bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-lg transition">
                    🛒 Agregar al carrito
                </button>


            </div>
        @endforeach
    </div>
    </div>
    <script>
    function carritoStore() {
        return {
            carrito: localStorage.getItem('carrito') ? JSON.parse(localStorage.getItem('carrito')) : [],
            mostrarCarrito: false,

            agregarAlCarrito(producto) {
                if (!producto.id || !producto.nombre) {
                    console.error("Error: Producto sin ID o nombre inválido", producto);
                    return;
                }

                let existe = this.carrito.find(p => p.id === producto.id);
                if (existe) {
                    existe.cantidad += 1;
                } else {
                    this.carrito.push({ ...producto, cantidad: 1 });
                }
                this.guardarCarrito();
            }


            eliminarProducto(index) {
                this.carrito.splice(index, 1);
                this.guardarCarrito();
            },

            calcularTotal() {
                return this.carrito.reduce((total, p) => total + (parseFloat(p.precio) * p.cantidad), 0).toFixed(2);
            }


            guardarCarrito() {
                localStorage.setItem('carrito', JSON.stringify(this.carrito));
            },

            generarTicket() {
                alert("Generando ticket para: \n" + JSON.stringify(this.carrito, null, 2));
                this.carrito = [];
                this.guardarCarrito();
            }
        };
    }
</script>
    
</x-app-layout>
