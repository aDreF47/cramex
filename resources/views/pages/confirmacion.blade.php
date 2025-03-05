<div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow mt-6" x-data="ticketPago()">
    <!-- Mensaje de confirmación -->
    <div class="text-center">
        <img src="https://cdn-icons-png.flaticon.com/512/845/845646.png" alt="Check" class="w-6 mx-auto">
        <h2 class="text-2xl font-bold text-green-700 mt-2">¡Gracias!</h2>
        <p class="text-gray-700 mt-2">Tu ticket de pago ha sido generado</p>
        <p class="mt-2">Usa el código generado <span class="font-bold text-blue-600" x-text="codigoCliente"></span> en los canales de pago del BCP para pagar fácilmente</p>
    </div>

    <!-- Detalles del ticket de pago -->
    <div class="mt-6">
        <h3 class="font-bold text-gray-800">Detalles del ticket de pago</h3>
        <div class="mt-2 text-gray-700">
            <p><strong>Fecha de emisión del ticket:</strong> <span x-text="fechaEmision"></span></p>
            <p><strong>Fecha máxima de pago:</strong> <span x-text="fechaMaxima"></span></p>
            <p><strong>Monto total:</strong> S/ <span x-text="montoTotal"></span></p>
            <p><strong>Método de pago:</strong> <span class="text-blue-600">Banco de Crédito >BCP></span></p>
        </div>
    </div>

    <!-- Área para ingresar código de cliente -->
    <div class="mt-6">
        <h3 class="font-bold text-gray-800">Ingrese su código de cliente</h3>
        <input type="text" x-model="codigoIngresado" placeholder="Ingrese el código aquí"
            class="border border-gray-300 px-3 py-2 rounded-lg w-full mt-2">
        <button @click="verificarCodigo()" class="bg-blue-600 text-white px-4 py-2 rounded-lg mt-2 w-full">Pagar</button>
        <p class="text-red-600 mt-2" x-show="errorCodigo">Código incorrecto, intenta nuevamente.</p>
    </div>

    <!-- Detalles del cliente -->
    <div class="mt-6">
        <h3 class="font-bold text-gray-800">Detalles del cliente</h3>
        <p><strong>Nombres y apellidos:</strong> admin</p>
    </div>

    <!-- Botones de acción -->
    <div class="mt-6 flex justify-between">
        <a href="#" class="text-blue-600 hover:underline">📥 Descargar ticket</a>
        <button @click="volverCatalogo()" class="bg-green-600 text-black px-4 py-2 rounded-lg">⬅️ Volver al catálogo</button>
    </div>
</div>

<!-- Script para manejar la lógica -->
<script>
    function ticketPago() {
        return {
            codigoCliente: Math.floor(10000000 + Math.random() * 90000000).toString(), // Código aleatorio de 8 caracteres
            codigoIngresado: '',
            fechaEmision: new Date().toLocaleString(),
            fechaMaxima: new Date(new Date().setDate(new Date().getDate() + 1)).toLocaleString(), // Un día después
            montoTotal: localStorage.getItem('montoTotal') || '0.00', // Obtener el monto del carrito
            errorCodigo: false,

            verificarCodigo() {
                if (this.codigoIngresado === this.codigoCliente) {
                    alert("✅ Pago realizado con éxito");
                } else {
                    this.errorCodigo = true;
                }
            },

            volverCatalogo() {
                window.location.href = "{{ route('products.productos') }}";
            }
        };
    }
</script>

