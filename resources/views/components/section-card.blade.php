<section class="row align-items-center mb-5 {{ $reverse ? 'flex-md-row-reverse' : '' }}" data-aos="fade-up">
    <div class="col-md-6">
        <h2 class="text-danger"><i class="bi {{ $icon }}"></i> {{ $title }}</h2>
        <p>{{ $text }}</p>
    </div>
    <div class="col-md-6">
        <img src="{{ asset($image) }}" class="img-fluid rounded" alt="{{ $title }}">
    </div>
</section>
