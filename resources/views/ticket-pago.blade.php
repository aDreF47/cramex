<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            🧾 Ticket de Pago
        </h2>
    </x-slot>

    <div class="container mx-auto p-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Sección de Información de Facturación -->
            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow">
                <h3 class="text-lg font-semibold text-green-700 flex items-center">
                    📜 Información de Facturación
                </h3>

                <div class="mt-4">
                    <label class="block font-semibold">Tipo de documento de pago:</label>
                    <div class="flex space-x-4 mt-2">
                        <button class="px-4 py-2 bg-green-600 text-white rounded">Boleta</button>
                        <button class="px-4 py-2 bg-gray-300 text-gray-700 rounded">Factura</button>
                    </div>
                </div>

                <div class="mt-4">
                    <label class="block font-semibold">Número de documento de identificación:</label>
                    <div class="flex">
                        <select class="border px-4 py-2 rounded-l bg-gray-200">
                            <option>DNI</option>
                            <option>RUC</option>
                        </select>
                        <input type="text" class="border px-4 py-2 rounded-r w-full" placeholder="Ingresa un número de documento">
                    </div>
                </div>

                <div class="mt-4">
                    <label class="block font-semibold">Nombres</label>
                    <input type="text" class="border px-4 py-2 w-full rounded" placeholder="Como aparece en la identificación">
                </div>

                <div class="mt-4">
                    <label class="block font-semibold">Apellidos</label>
                    <input type="text" class="border px-4 py-2 w-full rounded" placeholder="Como aparece en la identificación">
                </div>

                <div class="mt-4">
                    <label class="block font-semibold">Correo electrónico para el ticket:</label>
                    <input type="email" class="border px-4 py-2 w-full rounded" placeholder="usuario@correo.com">
                </div>

                <div class="mt-4">
                    <label class="block font-semibold">Observación para el comprobante (opcional):</label>
                    <input type="text" class="border px-4 py-2 w-full rounded" placeholder="Ingresa alguna observación">
                </div>
            </div>

            <!-- Sección de Resumen del Carrito -->
            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow">
                <h3 class="text-lg font-semibold text-green-700 flex items-center">
                    🛒 Resumen del Carrito
                </h3>

                <ul class="mt-4 divide-y divide-gray-300">
                    @foreach($carrito as $item)
                        <li class="flex justify-between py-2">
                            <div>
                                <p class="font-semibold text-gray-800">{{ $item['nombre'] }}</p>
                                <p class="text-gray-600">Cantidad: {{ $item['cantidad'] }}</p>
                            </div>
                            <p class="font-bold text-blue-600">S/ {{ number_format($item['precio'] * $item['cantidad'], 2) }}</p>
                        </li>
                    @endforeach
                </ul>

                <div class="mt-4 border-t pt-4">
                    <p class="font-bold text-lg text-green-700">
                        Monto total: S/ {{ number_format(collect($carrito)->sum(fn($p) => $p['precio'] * $p['cantidad']), 2) }}
                    </p>
                </div>
            </div>
        </div>

            <!-- Botones de navegación -->
            <div class="mt-6 flex justify-between">
            <button @click="regresar()" class="bg-green-500 text-black px-4 py-2 rounded mt-2 w-full">
                ⬅️ Volver 
            </button>
            <button @click="realizarcompra()" class="bg-green-600 hover:bg-green-700 text-black px-6 py-2 rounded-lg">
                ✅ Pagar 
            </button>
        </div>
    </div>
</x-app-layout>
