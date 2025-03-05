@extends('layouts.ticket')

@section('content')
    @if ($etapa === 1)
        @include('pages.procesopago')
    @elseif ($etapa === 2)
        @include('pages.transferencia')
    @elseif ($etapa === 3)
        @include('pages.confirmacion')
    @endif
@endsection