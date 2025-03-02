<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Colegio Cramex</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/estilos.css') }}"> 
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="/carrusel">
        <img src="{{ asset('/img/cramexlogo.png')}}" alt="Logo" height="80">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto">
          <li class="nav-item dropdown">
            <a class="btn btn-matricula dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
              Matrícula
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Proceso de Matrícula</a></li>
              <li><a class="dropdown-item" href="#">Requisitos</a></li>
              <li><a class="dropdown-item" href="#">Cronograma</a></li>
              <li><a class="dropdown-item" href="#">Costos y Métodos de Pago</a></li>
              <li><a class="dropdown-item" href="#">Procedimiento para Alumnos Nuevos</a></li>
              <li><a class="dropdown-item" href="#">Procedimiento para Alumnos Antiguos</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Nosotros
            </a>
            <ul class="dropdown-menu">
              <li class="dropdown-submenu">
                
                  <a class="dropdown-item" href="#">Propuesta educativa</a>
                  <a class="dropdown-item" href="#">Misión y Visión</a>
                  <a class="dropdown-item" href="#">Objetivos</a>
                  <a class="dropdown-item" href="#">Palabras del director</a>
                  <a class="dropdown-item" href="#">Himno de la institución</a>
                  <a class="dropdown-item" href="#">Insignia de Cramex</a>
                
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Talleres
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Arte y Cultura</a></li>
              <li><a class="dropdown-item" href="#">Deportes</a></li>
              <li><a class="dropdown-item" href="#">Tecnología</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Productos
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Uniforme Escolar</a></li>
              <li><a class="dropdown-item" href="#">Libros</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Servicios
            </a>
            <ul class="dropdown-menu">
              <li class="dropdown-submenu">
                <a class="dropdown-item" href="#">Servicios de Pago</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Pago de Matrícula</a></li>
                  <li><a class="dropdown-item" href="#">Pago de Pensiones Mensuales</a></li>
                  <li><a class="dropdown-item" href="#">Pago de uso de instalaciones</a></li>
                </ul>
              </li>
              <li class="dropdown-submenu">
                <a class="dropdown-item" href="#">Beneficios Incluidos con la Matrícula</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Intranet</a></li>
                  <li><a class="dropdown-item" href="#">Seguro Escolar</a></li>
                  <li><a class="dropdown-item" href="#">Carnet Estudiantil</a></li>
                </ul>
              </li>
              <li class="dropdown-submenu">
                <a class="dropdown-item" href="#">Responsabilidad Social</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Programas de Ayuda para Familias con Bajos Recursos</a></li>
                  <li><a class="dropdown-item" href="#">Voluntariado y Proyectos Comunitarios</a></li>
                  <li><a class="dropdown-item" href="#">Concientización sobre Medio Ambiente y Valores</a></li>
                </ul>
              </li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Novedades
            </a>
            <ul class="dropdown-menu">
              <li class="dropdown-submenu">
                <a class="dropdown-item" href="#">Programa Talentos</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Deportes</a></li>
                  <li><a class="dropdown-item" href="#">Seleccion y Olimpiadas</a></li>
                  <li><a class="dropdown-item" href="#">Primeros Puestos</a></li>
                </ul>
              </li>
              <a class="dropdown-item" href="#">Revistas</a>
              <a class="dropdown-item" href="#">Noticias</a>
              <a class="dropdown-item" href="#">Galeria de Fotos</a>
              <a class="dropdown-item" href="#">Galeria de Videos</a>
              <a class="dropdown-item" href="#">Redes Sociales</a>
              <a class="dropdown-item" href="#">En medios</a>
            </ul>
          </li>
        </ul>
        <div class="d-flex align-items-center">
          <div class="contact-info me-3" style="color: gray;">
            <i class="bi bi-telephone"> <img src="/images/telefono.png" alt="telefono" style="height: 20px;"> </i>
            0882 121
          </div>
          <a href="{{ route('login') }}" class="btn btn-intranet me-2">Intranet</a>
          <a href="#" class="btn btn-contacto">Contáctenos</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Noticias Destacadas -->
  <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('img/imagen1.jpg') }}" class="d-block w-100" alt="Imagen 1">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/imagen2.jpg') }}" class="d-block w-100" alt="Imagen 2">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/imagen3.jpg') }}" class="d-block w-100" alt="Imagen 3">
        </div>
    </div>
    
    <!-- Botón Anterior -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
    </button>
    
    <!-- Botón Siguiente -->
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
    </button>
</div>



  <!-- Educación Sin Límites -->
  <section class="education-section py-5 bg-light">
    <div class="container text-center">
      <h2 class="section-title">Educación Sin Límites</h2>
      <p class="mb-5">Formando líderes para un mundo cambiante con nuestro enfoque innovador.</p>
      <div class="row">
        <div class="col-md-4">
          <img src="{{ asset('/img/icon-colegio.png')}}" alt="Colegio">
          <h5 class="mt-3">Colegio</h5>
          <p>Admisión, Niveles, Sedes</p>
        </div>
          <div class="col-md-4">
          <img src="{{ asset('/img/icon-academia.png')}}" alt="Academia">
          <h5 class="mt-3">Academia</h5>
          <p>Ciclos, Solucionarios, Sedes</p>
        </div>
        <div class="col-md-4">
          <img src="{{ asset('/img/icon-taller.png')}}" alt="Talleres">
          <h5 class="mt-3">Talleres</h5>
          <p>Ajedrez, Matematica, Natación, Voley, etc.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Novedades -->
  <section class="novelties-section py-5">
    <div class="container">
      <h2 class="section-title">Novedades</h2>
      <div class="row">
        <div class="col-md-3">
          <img src="/images/misionvision.png" alt="Novedad 1" class="img-fluid rounded">
          <p class="mt-2 text-center">Título de la novedad 1</p>
        </div>
        <div class="col-md-3">
          <img src="/images/sistema-pagos.avif" alt="Novedad 2" class="img-fluid rounded">
          <p class="mt-2 text-center">Título de la novedad 2</p>
        </div>
        <div class="col-md-3">
          <img src="path/to/novelty3.jpg" alt="Novedad 3" class="img-fluid rounded">
          <p class="mt-2 text-center">Título de la novedad 3</p>
        </div>
        <div class="col-md-3">
          <img src="path/to/novelty4.jpg" alt="Novedad 4" class="img-fluid rounded">
          <p class="mt-2 text-center">Título de la novedad 4</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Redes de Contacto -->
  <section class="contact-section py-5 bg-light">
      <div class="container text-center">
        <h2 class="section-title">Contáctanos</h2>
        <p>Comunícate directamente con nuestras sedes.</p>
      <div class="d-flex justify-content-center">
        <div class="contact-icons">
          <img src="path/to/whatsapp-icon.png" alt="WhatsApp">
          <span>997594975</span>
        </div>
        <div class="contact-icons">
          <img src="/images/telefono.png" alt="Teléfono">
          <span>(01) 6805300</span>
        </div>
        <div class="contact-icons">
          <img src="path/to/email-icon.png" alt="Email">
          <span>contactanos@sacooliveros.edu.pe</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h5>NOSOTROS</h5>
          <ul>
            <li><a href="#">¿Quiénes somos?</a></li>
            <li><a href="#">Programa de talentos</a></li>
            <li><a href="#">Premios y distinciones</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>COLEGIOS</h5>
          <ul>
            <li><a href="#">Admisión</a></li>
            <li><a href="#">Niveles</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>ACADEMIAS</h5>
          <ul>
            <li><a href="#">Solucionarios</a></li>
            <li><a href="#">Ciclos virtuales</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>CEBA</h5>
          <ul>
            <li><a href="#">¿Qué es CEBA?</a></li>
            <li><a href="#">Sedes</a></li>
          </ul>
        </div>
      </div>
      <div class="text-center mt-3">
        <p>© Sociedad Saco Oliveros SAC - RUC: 20284670796</p>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Agregar el script de Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
