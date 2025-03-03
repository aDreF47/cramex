@extends('index')

@section('content')

<!-- Cargar librería AOS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">

<!-- Sección Propuesta Educativa -->
<section id="propuesta-educativa" class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8" data-aos="fade-up">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-body text-center">
                        <h2 class="text-danger fw-bold"><i class="bi bi-book"></i> Propuesta Educativa</h2>
                        <p class="text-muted">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet, ut! Veritatis sit, laboriosam at distinctio neque ratione labore velit repellat. Perferendis odio asperiores enim maxime laboriosam libero voluptate ut! Eos!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección Misión y Visión -->
<section id="mision-vision" class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8" data-aos="fade-up">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-body text-center">
                        <h2 class="text-danger fw-bold"><i class="bi bi-eye"></i> Misión y Visión</h2>
                        <p class="text-muted">Texto sobre la misión y visión...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección Objetivos -->
<section id="objetivos" class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8" data-aos="fade-up">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-body text-center">
                        <h2 class="text-danger fw-bold"><i class="bi bi-bullseye"></i> Objetivos</h2>
                        <p class="text-muted">Contenido de la sección objetivos...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección Palabras del Director -->
<section id="palabras-director" class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8" data-aos="fade-up">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-body text-center">
                        <h2 class="text-danger fw-bold"><i class="bi bi-chat-left-quote"></i> Palabras del Director</h2>
                        <p class="text-muted">Mensaje del director...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección Himno de la Institución -->
<section id="himno" class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8" data-aos="fade-up">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-body text-center">
                        <h2 class="text-danger fw-bold"><i class="bi bi-music-note"></i> Himno de la Institución</h2>
                        <p class="text-muted">Letra y significado del himno...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección Insignia de Cramex -->
<section id="insignia" class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8" data-aos="fade-up">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-body text-center">
                        <h2 class="text-danger fw-bold"><i class="bi bi-award"></i> Insignia de Cramex</h2>
                        <p class="text-muted">Información sobre la insignia...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cargar AOS para animaciones -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1000, // Duración de la animación
        once: true // Solo animar una vez al hacer scroll
    });
</script>

@endsection
