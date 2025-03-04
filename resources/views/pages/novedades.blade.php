@extends('index')

@section('content')

<!-- Hero Section Mejorado -->
<div class="hero-section text-center d-flex align-items-center justify-content-center">
    <div class="overlay"></div> <!-- Capa oscura -->
    <div class="hero-content">
        <h1 class="fw-bold text-white" data-aos="fade-down">Novedades</h1>
        <p class="text-white" data-aos="fade-up">Mantente al día con las Novedades y Noticias</p>
    </div>
</div>

<div class="container py-5">
    <!-- Propuesta Educativa -->
    <section id="propuesta-educativa" class="row align-items-center mb-5" data-aos="fade-up">
        <div class="col-md-6">
            <h2 class="text-danger"><i class="bi bi-book"></i>  Propuesta Educativa</h2>
            <p>Nuestra propuesta educativa está enfocada en...</p>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('/img/nosotros/propuesta-educativa.jpg')}}" class="img-fluid rounded" alt="Educación">
        </div>
    </section>

    <!-- Misión y Visión -->
    <section id="mision-vision" class="row align-items-center mb-5 flex-md-row-reverse" data-aos="fade-up">
        <div class="col-md-6">
            <h2 class="text-danger"><i class="bi bi-eye"></i> Misión y Visión</h2>
            <p>Nuestra misión es formar líderes...</p>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('/img/nosotros/misionvision.png')}}" class="img-fluid rounded" alt="Misión y Visión">
        </div>
    </section>

    <!-- Objetivos -->
    <section id="objetivos" class="text-center mb-5" data-aos="fade-up">
        <h2 class="text-danger"><i class="bi bi-bullseye"></i> Objetivos</h2>
        <p>Nuestros objetivos principales son...</p>
    </section>

    <!-- Secciones con Cards -->
    @php
        $secciones = [
            ['id' => 'palabras-director', 'icon' => 'bi-chat-left-quote', 'title' => 'Palabras del Director', 'desc' => 'Mensaje del director...'],
            ['id' => 'himno', 'icon' => 'bi-music-note', 'title' => 'Himno de la Institución', 'desc' => 'Letra y significado del himno...'],
            ['id' => 'insignia', 'icon' => 'bi-award', 'title' => 'Insignia de Cramex', 'desc' => 'Información sobre la insignia...']
        ];
    @endphp

    @foreach($secciones as $seccion)
    <section id="{{ $seccion['id'] }}" class="py-5 {{ $loop->index % 2 == 0 ? 'bg-light' : '' }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8" data-aos="fade-up">
                    <div class="card shadow-lg border-0 rounded-4">
                        <div class="card-body text-center">
                            <h2 class="text-danger fw-bold"><i class="bi {{ $seccion['icon'] }}"></i> {{ $seccion['title'] }}</h2>
                            <p class="text-muted">{{ $seccion['desc'] }} Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores quaerat animi provident ratione, voluptas tenetur nihil veritatis quas recusandae, dolorem ex cumque rem suscipit expedita magni beatae minima natus libero nemo error? Alias corrupti quas optio sit numquam velit, aut voluptatibus et facilis dolore. Harum facere similique explicabo eum laboriosam earum excepturi ratione exercitationem repudiandae numquam. Consequuntur quam odio atque, deserunt eum odit nemo. Accusamus nostrum minus laboriosam nisi eveniet! Soluta saepe laudantium aut ducimus voluptas quibusdam ipsam, vel repellendus a dolorum voluptatibus rerum reiciendis nisi dolores. Ullam maxime iusto quaerat dolore, numquam expedita dicta dolorem maiores non atque temporibus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endforeach
</div>
@endsection


@push('styles')
<link rel="stylesheet" href="{{ asset('css/nosotros.css') }}">
@endpush

@push('scripts')
<script src="{{ asset('js/nosotros.js') }}"></script>
@endpush
