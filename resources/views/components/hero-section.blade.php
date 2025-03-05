<div class="hero-section text-center d-flex align-items-center justify-content-center" 
     style="background: url('{{ asset($image) }}') no-repeat center center/cover; height: 400px; position: relative;">
    <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5);"></div>
    <div class="hero-content" style="position: relative; z-index: 1;">
        <h1 class="fw-bold text-white" data-aos="fade-down">{{ $title }}</h1>
        <p class="text-white" data-aos="fade-up">{{ $text }}</p>
    </div>
</div>
