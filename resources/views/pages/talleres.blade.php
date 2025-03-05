@extends('index')

@section('content')

<!-- Hero Section Mejorado -->
<x-hero-section 
    title="Talleres" 
    text="Visítanos y conoce nuestras actividades extracurriculares"
    image="/img/talleres/cramextalle.jpg"
/>

<div class="container py-5">
    <section id="arte-cultura">
        <x-section-card 
            title="Arte y Cultura"
            icon="bi-palette"
            text="Nuestra propuesta educativa está enfocada en..."
            image="/img/nosotros/propuesta-educativa.jpg"
        />
    </section>

    <section id="deportes">
        <x-section-card 
            title="Deportes"
            icon="bi-dribbble"
            text="Nuestra misión es formar líderes..."
            image="/img/nosotros/misionvision.png"
            reverse="true"
        />
    </section>

    <section id="tecnologia">
        <x-section-card 
            title="Tecnología"
            icon="bi-laptop"
            text="Nuestra propuesta educativa está enfocada en..."
            image="/img/nosotros/propuesta-educativa.jpg"
        />      
    </section>
</div>

@endsection


@push('styles')
<link rel="stylesheet" href="{{ asset('css/nosotros.css') }}">
@endpush

@push('scripts')
<script src="{{ asset('js/talleres.js') }}"></script>
@endpush
