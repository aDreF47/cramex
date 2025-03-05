<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            🗃️ Ticket de Pago
        </h2>
    </x-slot>

    <div class="container mx-auto p-6" x-data="carritoStore()">
        <p class="text-gray-600">Completa la información necesaria para generar tu ticket de pago. Una vez que lo tengas, podrás completar fácilmente el pago de tus ítems en el banco que prefieras.</p>
        <!-- Progreso de pago -->
            <div class="flex justify-center my-6 space-x-6">
            <div class="flex items-center space-x-2">
                <span class="bg-green-700 text-white px-3 py-1 rounded-full">1</span>
                <span class="font-semibold text-green-700">Facturación</span>
            </div>
            <div class="flex items-center space-x-2">
                <span class="bg-gray-300 text-white px-3 py-1 rounded-full">2</span>
                <span class="text-gray-500">Transferencia Bancaria</span>
            </div>
            <div class="flex items-center space-x-2">
                <span class="bg-gray-300 text-white px-3 py-1 rounded-full">3</span>
                <span class="text-gray-500">Confirmación</span>
            </div>
        </div>
        
        <!-- Sección de Pago en 2 Columnas -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-start mt-6">

            <!-- Información de Facturación -->
            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow">
                <h3 class="text-green-700 font-semibold text-lg">📜 Información de Facturación</h3>

                <div class="mt-4">
                    <label class="font-semibold text-gray-700">Tipo de documento de pago:</label>
                    <div class="flex space-x-4 mt-2">
                        <button class="bg-green-600 text-black px-4 py-2 rounded-lg">Boleta</button>    
                    </div>
                </div>

                <div class="mt-4">
                    <label class="font-semibold text-gray-700">Número de documento de identificación:</label>
                    <div class="flex items-center space-x-2 mt-2">
                        <select class="border px-3 py-2 rounded-lg">
                            <option>DNI</option>
                        </select>
                        <input type="text" placeholder="Ingresa un número de documento" class="border px-3 py-2 rounded-lg flex-grow">
                        <button class="bg-green-600 text-white px-4 py-2 rounded-lg">🔍</button>
                    </div>
                </div>

                <div class="mt-4 grid grid-cols-2 gap-4">
                    <div>
                        <label class="font-semibold text-gray-700">Nombres</label>
                        <input type="text" placeholder="Como aparece en la identificación" class="border px-3 py-2 rounded-lg w-full">
                    </div>
                    <div>
                        <label class="font-semibold text-gray-700">Apellidos</label>
                        <input type="text" placeholder="Como aparece en la identificación" class="border px-3 py-2 rounded-lg w-full">
                    </div>
                </div>

                <div class="mt-4">
                    <label class="font-semibold text-gray-700">Correo electrónico para el ticket:</label>
                    <input type="email" value="usuario@correo.com" class="border px-3 py-2 rounded-lg w-full">
                </div>

                <div class="mt-4">
                    <label class="font-semibold text-gray-700">Observación para el comprobante (opcional):</label>
                    <input type="text" placeholder="Ingresa alguna observación" class="border px-3 py-2 rounded-lg w-full">
                </div>
            </div>

            <!-- Resumen del Carrito -->
            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow">
                <h3 class="text-green-700 font-semibold text-lg">🛍️ Resumen del Carrito</h3>
                <ul class="mt-4 divide-y divide-gray-300">
                    <template x-for="producto in carrito" :key="producto.id">
                        <li class="py-3 flex justify-between items-center">
                            <div>
                                <span class="font-semibold text-blue-700" x-text="producto.nombre"></span>
                                <p class="text-gray-600">Cantidad: <span x-text="producto.cantidad"></span></p>
                            </div>
                            <p class="font-semibold text-lg text-blue-700">S/ <span x-text="(producto.precio * producto.cantidad).toFixed(2)"></span></p>
                        </li>
                    </template>
                </ul>

                <div class="mt-4 border-t pt-4">
                    <p class="font-bold text-green-700 text-xl">Monto total: S/ <span x-text="calcularTotal()"></span></p>
                </div>
            </div>

        </div>

        <!-- Botones de Navegación -->
        <div class="mt-6 flex justify-between">
            <button @click="regresar()" class="bg-green-500 text-black px-4 py-2 rounded mt-2">
                ⬅️ Volver
            </button>
            <button @click="realizarcompra()" class="bg-green-600 hover:bg-green-700 text-black px-6 py-2 rounded-lg">
                Siguiente ➡️ 
            </button>
        </div>
    </div>
</x-app-layout>
