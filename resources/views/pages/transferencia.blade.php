
<!-- Sección de Transferencia Bancaria -->
<div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow">
    <h3 class="text-green-700 font-semibold text-lg">💳 Tipo de transferencia bancaria</h3>
    <p class="text-gray-600 mt-2">Selecciona el banco al cual harás tu transferencia</p>

    <!-- Opciones de Bancos -->
    <div class="mt-4">
        <label class="block text-lg font-semibold text-blue-700">
            <input type="radio" name="banco" value="BCP" class="mr-2" checked>
            🏦 <span class="text-blue-700">Banco de Crédito <strong>›BCP‹</strong></span>
        </label>
    </div>

    <!-- Información de Pago -->
    <div class="bg-gray-100 p-4 rounded-lg mt-4">
        <p class="text-gray-700">¡Listo! Después de generar tu ticket, te proporcionaremos un código de pago para que puedas completar tu transacción en cualquiera de los canales de atención que te ofrece el BCP. ¡Así de fácil!</p>

        <!-- Sección de opciones de pago -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4" x-data="{ metodoSeleccionado: '' }">
            <!-- Opción: Banca Móvil BCP -->
            <div 
                class="cursor-pointer p-4 rounded-lg flex items-center justify-center border-2"
                :class="metodoSeleccionado === 'movil' ? 'bg-blue-700 text-black border-blue-400 shadow-lg' : 'bg-blue-600 text-white border-transparent'"
                @click="metodoSeleccionado = 'movil'">
                📱 Banca Móvil BCP
            </div>

            <!-- Opción: Agentes BCP -->
            <div 
                class="cursor-pointer p-4 rounded-lg flex items-center justify-center border-2"
                :class="metodoSeleccionado === 'agente' ? 'bg-blue-700 text-black border-blue-400 shadow-lg' : 'bg-blue-600 text-white border-transparent'"
                @click="metodoSeleccionado = 'agente'">
                🏪 Agentes BCP
            </div>

            <!-- Opción: Banca por Internet -->
            <div 
                class="cursor-pointer p-4 rounded-lg flex items-center justify-center border-2"
                :class="metodoSeleccionado === 'internet' ? 'bg-blue-700 text-black border-blue-400 shadow-lg' : 'bg-blue-600 text-white border-transparent'"
                @click="metodoSeleccionado = 'internet'">
                💻 Banca por Internet
            </div>
        </div>

        <!-- Botón de Siguiente (deshabilitado si no se selecciona un método) 
        <div class="mt-6 flex justify-end">
            <button 
                class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-lg"
                :class="metodoSeleccionado === '' ? 'opacity-50 cursor-not-allowed' : ''"
                :disabled="metodoSeleccionado === ''"
                @click="siguiente()">
                Siguiente ➡️
            </button>
        </div>-->

    </div>
</div>



