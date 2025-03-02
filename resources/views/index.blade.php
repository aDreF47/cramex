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
                <a class="dropdown-item" href="#">Pago de uso de instalaciones</a>
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
          <a href="{{ route('login') }}" class="btn btn-intranet me-2">Intranet</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Carrusel de noticias Destacadas -->
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
      <p class="text-muted">Formando líderes para un mundo cambiante con nuestro enfoque innovador.</p>
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
          <img src="{{ asset('/img/novedadhome1.png')}}" alt="Novedad 1" class="img-fluid rounded">
          <p class="mt-2 text-center">Charla sobre el acoso</p>
        </div>
        <div class="col-md-3">
          <img src="{{ asset('/img/novedadhome2.png')}}" alt="Novedad 2" class="img-fluid rounded">
          <p class="mt-2 text-center">Directiva 2025</p>
        </div>
        <div class="col-md-3">
          <img src="{{ asset('/img/novedadhome3.png')}}" alt="Novedad 3" class="img-fluid rounded">
          <p class="mt-2 text-center">Primer puesto en concurso de matemática interescolar</p>
        </div>
        <div class="col-md-3">
          <img src="{{ asset('/img/novedadhome4.png')}}" alt="Novedad 4" class="img-fluid rounded">
          <p class="mt-2 text-center">Inauguración de la verbena Cramex</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Redes de Contacto -->
<section class="contact-section py-5 bg-light">
    <div class="container text-center">
        <h2 class="section-title text-danger fw-bold">Contáctanos</h2>
        <p class="text-muted">Comunícate directamente con nuestras sedes.</p>
        
        <div class="d-flex justify-content-center gap-4 mt-3">
            <!-- WhatsApp -->
            <div class="contact-icons d-flex align-items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-whatsapp text-success" viewBox="0 0 16 16">
                    <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592"></path>
                </svg>
                <span class="fw-bold">997594975</span>
            </div>

            <!-- Teléfono -->
            <div class="contact-icons d-flex align-items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-telephone text-primary" viewBox="0 0 16 16">
                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58z"></path>
                </svg>
                <span class="fw-bold">(01) 6805300</span>
            </div>

            <!-- Correo -->
            <div class="contact-icons d-flex align-items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-envelope text-danger" viewBox="0 0 16 16">
                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"></path>
                </svg>
                <span class="fw-bold">contactanos@cramex.edu.pe</span>
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
        <p>© Colegio Cramex SAC - RUC: 20284670796</p>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Agregar el script de Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
