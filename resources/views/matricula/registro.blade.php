@extends('layouts.matricula')

@section('content')
<div class="container mt-4">
    <div class="row align-items-center">
        <!-- Columna Izquierda: Imagen -->
        <div class="col-md-6 d-none d-md-block">
            <img src="{{ asset('img/imagen2.jpg') }}" class="img-fluid rounded shadow" alt="Matrícula">
        </div>

        <!-- Columna Derecha: Formulario -->
        <div class="col-md-6">
            <div class="card shadow p-4" style="background-color: #ffeeba;"> <!-- Cambia el color aquí -->

                <h2 class="text-center">Registro de Matrícula</h2>
                <form action="{{ route('matricula.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Nombre:</label>
                            <input type="text" name="nombre" class="form-control" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Apellido:</label>
                            <input type="text" name="apellido" class="form-control" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">DNI:</label>
                            <input type="text" name="dni" class="form-control" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Correo:</label>
                            <input type="email" name="correo" class="form-control" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Teléfono:</label>
                            <input type="text" name="telefono" class="form-control" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Grado de Interés:</label>
                            <select name="grado" class="form-select">
                                <option value="Primaria">Primaria</option>
                                <option value="Secundaria">Secundaria</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Subir Documento (PDF, JPG, PNG):</label>
                        <input type="file" name="documento" class="form-control" required>
                    </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-danger px-4 py-2">Enviar</button>
                        </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
