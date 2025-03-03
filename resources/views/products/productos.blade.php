<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            📚 Tienda del Colegio
        </h2>
    </x-slot>

    <div class="p-6 bg-white dark:bg-gray-800 shadow rounded-lg">
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

                <!-- Botón para Agregar al Carrito -->
                <button class="mt-3 w-full bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-lg transition">
                    🛒 Agregar al carrito
                </button>
            </div>
        @endforeach
    </div>

    </div>
    <div class="p-6 bg-white dark:bg-gray-800 shadow rounded-lg">
        <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-4">
            🎉 Servicios Destacados
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

                <!-- Botón para Agregar al Carrito -->
                <button class="mt-3 w-full bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-lg transition">
                    🛒 Agregar al carrito
                </button>
            </div>
        @endforeach
    </div>

    </div>
</x-app-layout>
