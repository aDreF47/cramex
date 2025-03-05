<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            🛒 Carrito de Compras
        </h2>
    </x-slot>

    <div class="p-6 bg-white dark:bg-gray-800 shadow rounded-lg" x-data="carritoStore">
        <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-4">
            🛍️ Productos en tu Carrito
        </h3>

        <div x-show="carrito.length === 0" class="text-gray-500">Tu carrito está vacío.</div>

        <div x-show="carrito.length > 0">
            <table class="w-full border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="border border-gray-300 p-2">Producto</th>
                        <th class="border border-gray-300 p-2">Precio</th>
                        <th class="border border-gray-300 p-2">Cantidad</th>
                        <th class="border border-gray-300 p-2">Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <template x-for="(producto, index) in carrito" :key="producto.id">
                        <tr class="border border-gray-300">
                            <td class="p-2" x-text="producto.nombre"></td>
                            <td class="p-2">S/ <span x-text="producto.precio.toFixed(2)"></span></td>
                            <td class="p-2 flex items-center">
                                <button @click="disminuirCantidad(producto.id)" class="bg-gray-300 text-black px-2 rounded">➖</button>
                                <span class="text-sm font-bold mx-2" x-text="producto.cantidad"></span>
                                <button @click="aumentarCantidad(producto.id)" class="bg-gray-300 text-black px-2 rounded">➕</button>
                            </td>
                            <td class="p-2">
                                <button @click="eliminarProducto(producto.id)" class="bg-red-500 text-white px-2 py-1 rounded">
                                    ❌
                                </button>
                            </td>
                        </tr>
                    </template>
                </tbody>

            </table>

            <div class="mt-4">
                <p class="font-bold mt-2 text-gray-900">Total: S/ <span x-text="calcularTotal()"></span></p>
            </div>

            <form action="{{ route('ticket.pago') }}" method="GET">
                <button class="mt-3 bg-green-600 hover:bg-green-700 text-black py-2 px-4 rounded-lg w-full">
                    ✅ Generar Ticket de Pago
                </button>
            </form>

        </div>
    </div>

    <!--<script>
        function carritoStore() {
            return {
                carrito: localStorage.getItem('carrito') ? JSON.parse(localStorage.getItem('carrito')) : [],
                mostrarCarrito: false,

            agregarAlCarrito(producto) {
                if (!producto.IdProducto || !producto.NombreProducto || !producto.Precio) {
                console.error("Error: Producto sin ID, nombre o precio inválido", producto);
                return;
            }

            let existe = this.carrito.find(p => p.id === producto.IdProducto);
            if (existe) {
                existe.cantidad += 1;
            } else {
                this.carrito.push({
                    id: producto.IdProducto,  // Normaliza el ID
                    nombre: producto.NombreProducto,  // Normaliza el nombre
                    precio: parseFloat(producto.Precio),  // Convierte a número
                    imagen: producto.imagen ?? '',  // Evita errores si no tiene imagen
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
                return this.carrito.reduce((total, p) => total + (parseFloat(p.precio) * p.cantidad), 0).toFixed(2);
            },

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
    </script> -->

</x-app-layout>
