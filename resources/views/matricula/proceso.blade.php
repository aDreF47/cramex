@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Proceso de Matrícula</h2>
    <ul class="list-group">
        <li class="list-group-item"><a href="{{ route('matricula.registro') }}">Registro de Matrícula</a></li>
        <li class="list-group-item"><a href="{{ route('matricula.requisitos') }}">Requisitos</a></li>
        <li class="list-group-item"><a href="{{ route('matricula.documentos') }}">Documentos Necesarios</a></li>
        <li class="list-group-item"><a href="{{ route('matricula.costos') }}">Costos y Métodos de Pago</a></li>
        <li class="list-group-item"><a href="{{ route('matricula.faq') }}">Preguntas Frecuentes (FAQ)</a></li>
    </ul>
</div>
@endsection
