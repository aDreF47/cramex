@extends('layouts.matricula')

@section('content')
<div class="container">
    <h2>Proceso de Matrícula</h2>
    <ul class="list-group">
        <li class="list-group-item"><a href="{{ route('matricula.registro') }}">Registro de Matrícula</a></li>
        <li class="list-group-item"><a href="">Requisitos</a></li>
        <li class="list-group-item"><a href="">Documentos Necesarios</a></li>
        <li class="list-group-item"><a href="">Costos y Métodos de Pago</a></li>
        <li class="list-group-item"><a href="">Preguntas Frecuentes (FAQ)</a></li>
    </ul>
</div>
@endsection
