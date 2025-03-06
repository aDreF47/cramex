@extends('index')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-header bg-warning text-white text-center py-3">
            <h2 class="mb-0">Pago de Uso de Instalaciones</h2>
        </div>
        <div class="card-body">
            <p class="text-center">Si deseas reservar un espacio dentro de nuestras instalaciones, completa el siguiente formulario.</p>

            <form action="{{ route('reservar.instalacion') }}" method="POST">
                @csrf
                
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="nombre" class="form-label fw-bold">Nombre Completo</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ej. Juan Pérez" required>
                    </div>

                    <div class="col-md-6">
                        <label for="correo" class="form-label fw-bold">Correo Electrónico</label>
                        <input type="email" id="correo" name="correo" class="form-control" placeholder="ejemplo@correo.com" required>
                    </div>

                    <div class="col-md-6">
                        <label for="telefono" class="form-label fw-bold">Teléfono</label>
                        <input type="tel" id="telefono" name="telefono" class="form-control" placeholder="999-999-999" required>
                    </div>

                    <div class="col-md-3">
                        <label for="fecha" class="form-label fw-bold">Fecha de Reserva</label>
                        <input type="date" id="fecha" name="fecha" class="form-control" required>
                    </div>

                    <div class="col-md-3">
                        <label for="hora" class="form-label fw-bold">Hora de Uso</label>
                        <input type="time" id="hora" name="hora" class="form-control" required>
                    </div>

                    <div class="col-md-6">
    <label for="espacio" class="form-label fw-bold">Espacio a Reservar</label>
    <select id="espacio" name="espacio" class="form-select" required onchange="actualizarCosto()">
        <option value="gimnasio">Gimnasio - S/ 50.00</option>
        <option value="aula-multiuso">Aula Multiuso - S/ 30.00</option>
        <option value="cancha">Cancha Deportiva - S/ 40.00</option>
        <option value="auditorio">Auditorio - S/ 80.00</option>
    </select>
</div>

<div class="col-md-6">
    <label for="costo" class="form-label fw-bold">Costo de la Reserva</label>
    <input type="text" id="costo" class="form-control" value="S/ 50.00" readonly>
</div>


                    <div class="col-md-12">
                        <label for="motivo" class="form-label fw-bold">Motivo de la Reserva</label>
                        <textarea id="motivo" name="motivo" class="form-control" rows="4" placeholder="Escribe el motivo de tu reserva aquí..." required></textarea>
                    </div>

                    <div class="col-12 text-center mt-3">
                        <button type="submit" class="btn btn-success btn-lg px-4">Enviar Solicitud</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Agregar Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    function actualizarCosto() {
        let espacioSeleccionado = document.getElementById("espacio").value;
        let costos = {
            "gimnasio": "S/ 50.00",
            "aula-multiuso": "S/ 30.00",
            "cancha": "S/ 40.00",
            "auditorio": "S/ 80.00"
        };
        document.getElementById("costo").value = costos[espacioSeleccionado];
    }
</script>
@endsection
