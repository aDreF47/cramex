<!-- Barra de navegacion -->
<nav class="navbar navbar-expand-lg navbar-light bg-warning">
      <div class="container ">
          <!-- Logo -->
          <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
              <img src="{{ asset('/img/cramexlogo.png')}}" alt="Logo" height="60">
              <span class="ms-2 text-danger cramexlogoletra">Cramex</span>
          </a>

          <!-- Botón Menú (Móvil) -->
          <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Menú -->
          <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav mx-auto gap-2">
                  <!-- Matrícula -->
                  <li class="nav-item dropdown">
                        <a class="btn btn-danger dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Matrícula
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('matricula.registro') }}">Registro de Matrícula</a></li>

                        </ul>
                    </li>

                  <!-- Nosotros -->
                  <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="{{ route('nosotros') }}" >
                        Nosotros
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('nosotros') }}#propuesta-educativa">Propuesta Educativa</a></li>
                        <li><a class="dropdown-item" href="{{ route('nosotros') }}#mision-vision">Misión y Visión</a></li>
                        <li><a class="dropdown-item" href="{{ route('nosotros') }}#objetivos">Objetivos</a></li>
                        <li><a class="dropdown-item" href="{{ route('nosotros') }}#palabras-director">Palabras del Director</a></li>
                        <li><a class="dropdown-item" href="{{ route('nosotros') }}#himno">Himno de la Institución</a></li>
                        <li><a class="dropdown-item" href="{{ route('nosotros') }}#insignia">Insignia de Cramex</a></li>
                    </ul>
                  </li>

                  <!-- Talleres -->
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="{{ route('talleres') }}">
                          Talleres
                      </a>
                      <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('talleres') }}#arte-cultura">Arte y Cultura</a></li>
                            <li><a class="dropdown-item" href="{{ route('talleres') }}#deportes">Deportes</a></li>
                            <li><a class="dropdown-item" href="{{ route('talleres') }}#tecnologia">Tecnología</a></li>
                        </ul>

                  </li>

                  <!-- Servicios -->
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="{{ route('servicios') }}">
                          Servicios
                      </a>
                      <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('servicios') }}#pago-instalaciones">Pago de Uso de Instalaciones</a></li>
                            <li><a class="dropdown-item" href="{{ route('servicios') }}#beneficios-matricula">Beneficios con la Matrícula</a></li>
                            <li><a class="dropdown-item" href="{{ route('servicios') }}#responsabilidad-social">Responsabilidad Social</a></li>
                        </ul>

                  </li>

                  <!-- Novedades -->
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="{{ route('novedades') }}">
                          Novedades
                      </a>
                      <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('novedades') }}#programa-talentos">Programa Talentos</a></li>
                            <li><a class="dropdown-item" href="{{ route('novedades') }}#revistas">Revistas</a></li>
                            <li><a class="dropdown-item" href="{{ route('novedades') }}#noticias">Noticias</a></li>
                            <li><a class="dropdown-item" href="{{ route('novedades') }}#galeria-fotos">Galería de Fotos</a></li>
                            <li><a class="dropdown-item" href="{{ route('novedades') }}#redes-sociales">Redes Sociales</a></li>
                        </ul>

                  </li>
              </ul>

              <!-- Botón Intranet -->
              <div class="d-flex">
                  <a href="{{ route('login') }}" class="btn btn-success px-4">Intranet</a>
              </div>
          </div>
      </div>
  </nav>