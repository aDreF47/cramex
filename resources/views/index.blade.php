<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="{{ asset('img/cramexlogo.png') }}">
  <title>Colegio Cramex</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
  <link rel="stylesheet" href="{{ asset('css/estilos.css') }}"> 

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@1,300..900&display=swap" rel="stylesheet">

  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
  @stack('styles')

</head>
<body>

  <!-- Incluir Navbar -->
  @include('components.navbar')

  <!-- Incluir Redes Sociales -->
  @include('components.socials')

  <!-- Contenido dinámico de las vistas -->
  <main>
      @yield('content')
  </main>

  <!-- Incluir Footer -->
  @include('components.footer')

  <!-- Incluir Botón Scroll-Top (casita) -->
  @include('components.scroll-top')

  <!-- Agregar el script de Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Script para mostrar/ocultar el botón -->
  <script>
      document.addEventListener("DOMContentLoaded", function () {
          let btnScrollTop = document.getElementById("btnScrollTop");
          let scrolled = false; // Variable para detectar la primera vez

          window.addEventListener("scroll", function () {
              if (window.scrollY > 100 && !scrolled) {
                  btnScrollTop.style.display = "flex"; // Mostrar botón
                  scrolled = true; // Marcar que ya hizo scroll por primera vez
              }
          });

          // Volver al inicio al hacer clic en el botón
          btnScrollTop.addEventListener("click", function (event) {
              event.preventDefault();
              window.scrollTo({ top: 0, behavior: "smooth" }); // Desplazamiento suave al inicio
          });
      });
  </script>

<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
@stack('scripts')

  </body>
</html>
