<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            🗃️ Ticket de Pago
        </h2>
    </x-slot>

    <div class="container mx-auto p-6" x-data="carStore()">
        <p class="text-gray-600">Completa la información necesaria para generar tu ticket de pago. Una vez que lo tengas, podrás completar fácilmente el pago de tus ítems en el banco que prefieras.</p>
        
        <!-- Progreso de Pago -->
        <div class="flex justify-center my-6 space-x-6">
            <div :class="{'bg-green-700 text-black': etapa === 1, 'bg-gray-300 text-gray-500': etapa !== 1}" class="px-3 py-1 rounded-full">Facturación</div>
            <div :class="{'bg-green-700 text-black': etapa === 2, 'bg-gray-300 text-gray-500': etapa !== 2}" class="px-3 py-1 rounded-full">Transferencia</div>
            <div :class="{'bg-green-700 text-black': etapa === 3, 'bg-gray-300 text-gray-500': etapa !== 3}" class="px-3 py-1 rounded-full">Confirmación</div>
        </div>

        <main>
            @yield('content')  {{-- Aquí se renderiza cada paso del proceso de pago --}}
        </main>

        <!-- Botones de Navegación -->
        <div class="mt-6 flex justify-between">
            <button @click="regresar()" class="bg-green-500 text-black px-4 py-2 rounded mt-2">
                ⬅️ Volver
            </button>
            <button @click="siguiente()" class="bg-green-600 hover:bg-green-700 text-black px-6 py-2 rounded-lg">
                Siguiente ➡️ 
            </button>
        </div>
    </div>

    <!-- Script para manejar el flujo de etapas -->
    <script>
    function carStore() {
        return {
            etapa: parseInt(localStorage.getItem('etapa')) || 1, // Recuperar etapa de localStorage
            carrito: JSON.parse(localStorage.getItem('carrito')) || [], // Obtener carrito de localStorage

            regresar() {
                if (this.etapa === 1) {
                    localStorage.removeItem('etapa'); // Eliminar la etapa guardada y regresar al carrito
                    window.location.href = "{{ route('carrito.index') }}";
                } else {
                    this.etapa -= 1;
                    localStorage.setItem('etapa', this.etapa); // Guardar la nueva etapa antes de redirigir

                    // Redireccionar a la etapa anterior
                    switch (this.etapa) {
                        case 1:
                            window.location.href = "{{ route('procesopago') }}";
                            break;
                        case 2:
                            window.location.href = "{{ route('ticket.transferencia') }}";
                            break;
                    }
                }
            },

            siguiente() {
                
                switch (this.etapa) {
                    case 1:
                        this.etapa += 1;
                        localStorage.setItem('montoTotal', this.calcularTotal()); // Guardar el monto total
                        localStorage.setItem('etapa', this.etapa); // Guardar etapa antes de redirigir
                        window.location.href = "{{ route('ticket.transferencia') }}";
                        break;
                    case 2:
                        this.etapa += 1;
                        localStorage.setItem('etapa', this.etapa); // Guardar etapa antes de redirigir
                        window.location.href = "{{ route('ticket.confirmacion') }}";
                        break;
                    default:
                        console.error("Etapa no válida");
                    }
                },

            calcularTotal() {
                return this.carrito.reduce((total, producto) => total + (producto.precio * producto.cantidad), 0).toFixed(2);
            }
        };
    }
</script>


</x-app-layout>
