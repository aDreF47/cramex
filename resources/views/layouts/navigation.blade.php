<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Inicio') }}
                    </x-nav-link>
                    <x-nav-link :href="route('products.productos')" :active="request()->routeIs('products.productos')">
                        {{ __('Productos') }}
                    </x-nav-link>
                     
                </div>
            </div>
                        <!-- Carrito de compras -->
            <div x-data="carritoStore" class="relative">
                <!-- Ícono del carrito -->
                <button @click="mostrarCarrito = !mostrarCarrito" class="relative p-2">
                    🛒 <span x-text="carrito.length" class="absolute -top-2 -right-2 bg-red-500 text-white text-xs px-1 rounded-full"></span>
                </button>
                <!-- Mostrar carrito -->
                <div x-show="mostrarCarrito" class="absolute right-0 mt-2 w-[350px] bg-white border rounded-lg shadow-lg p-6">
                    <h3 class="font-semibold text-gray-700">🛍️ Mi Carrito</h3>
                    <ul class="divide-y divide-gray-300 max-h-60 overflow-y-auto">
                        <template x-for="(producto, index) in carrito" :key="producto.id">
                            <li class="flex items-center justify-between py-2">
                                <div class="flex-1 px-2">
                                    <span class="text-sm block font-semibold" x-text="producto.nombre"></span>
                                    <span class="text-sm font-bold">S/ <span x-text="(producto.precio * producto.cantidad).toFixed(2)"></span></span>
                                </div>
                                <!-- Controles de cantidad -->
                                <div class="flex items-center space-x-2">
                                    <button @click="disminuirCantidad(producto.id)" class="bg-gray-300 text-black px-2 rounded">➖</button>
                                    <span class="text-sm font-bold" x-text="producto.cantidad"></span>
                                    <button @click="aumentarCantidad(producto.id)" class="bg-gray-300 text-black px-2 rounded">➕</button>
                                </div>
                                <button @click="eliminarProducto(producto.id)" class="text-red-600">❌</button>
                            </li>
                        </template>
                    </ul>
                    <p class="font-bold mt-2 text-gray-900">Total: S/ <span x-text="calcularTotal()"></span></p>
                    <button @click="generarTicket()" class="bg-green-500 text-black px-4 py-2 rounded mt-2 w-full">
                        Generar Ticket
                    </button>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Perfil') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Cerrar Sesión') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger Menu for Mobile -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Inicio') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('products.productos')" :active="request()->routeIs('products.productos')">
                {{ __('Productos') }}
            </x-responsive-nav-link>
            
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
               
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Perfil') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Cerrar Sesión') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
