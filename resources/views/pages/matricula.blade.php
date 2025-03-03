@extends('index')

@section('content')
<div class="container py-5">
    <h2 class="text-center text-danger fw-bold">Matrícula</h2>
    <p class="text-center text-muted">Aquí encontrarás toda la información sobre el proceso de matrícula.</p>

    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('/img/matricula-proceso.jpg')}}" alt="Proceso de Matrícula" class="img-fluid rounded">
            <h5 class="mt-3 text-center">Proceso de Matrícula</h5>
            <p class="text-center">Pasos detallados para completar la matrícula.</p>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('/img/matricula-requisitos.jpg')}}" alt="Requisitos" class="img-fluid rounded">
            <h5 class="mt-3 text-center">Requisitos</h5>
            <p class="text-center">Documentos necesarios para la inscripción.</p>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-4">
            <img src="{{ asset('/img/matricula-cronograma.jpg')}}" alt="Cronograma" class="img-fluid rounded">
            <h5 class="mt-3 text-center">Cronograma</h5>
            <p class="text-center">Fechas importantes del proceso de matrícula.</p>
        </div>
        <div class="col-md-4">
            <img src="{{ asset('/img/matricula-costos.jpg')}}" alt="Costos y Métodos de Pago" class="img-fluid rounded">
            <h5 class="mt-3 text-center">Costos y Métodos de Pago</h5>
            <p class="text-center">Información sobre precios y opciones de pago.</p>
        </div>
        <div class="col-md-4">
            <img src="{{ asset('/img/matricula-alumnos.jpg')}}" alt="Alumnos Nuevos y Antiguos" class="img-fluid rounded">
            <h5 class="mt-3 text-center">Alumnos Nuevos y Antiguos</h5>
            <p class="text-center">Procedimiento específico según la condición del alumno.</p>
        </div>
    </div>
</div>
@endsection
