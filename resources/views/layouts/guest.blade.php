<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" itemscope itemtype="http://schema.org/WebPage">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" sizes="76x76" href="{{ asset('img/cramexlogo.png') }}">
  <title>Intranet Cramex</title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900" />
  <!-- Nucleo Icons -->
  <link href="{{ asset('assets/front/assets/css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{ asset('assets/front/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- Material Icons -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset('assets/front/assets/css/material-kit.css?v=3.1.0')}}" rel="stylesheet" />
</head>

<body class="sign-in-basic">
  <!-- Navbar Transparent -->
  <nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3  navbar-transparent ">
    <div class="container">
      <a class="navbar-brand  text-white " href="/" rel="tooltip" title="Pagina principal de IEP CRAMEX" data-placement="bottom" target="_blank">
        IEP Cramex SAC
      </a>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="page-header align-items-start min-vh-100" style="background-image: url('img/signin/fondosignin.png');" loading="lazy">
    <span class="mask bg-gradient-dark opacity-6"></span>
    <div class="container my-auto">
    <div class="text-center">
        <a class="btn btn-link px-3" href="{{ route('home') }}">
            <img src="{{ asset('/img/cramexlogo.png')}}" alt="Logo" height="125">
        </a>
    </div>
      <div class="row">
        <div class="col-lg-4 col-md-8 col-12 mx-auto">
          <div class="card z-index-0 fadeIn3 fadeInBottom">
            <div class="card-body">
                {{ $slot }}
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer position-absolute bottom-2 py-2 w-100">
      <div class="container">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-12 col-md-6 my-auto">
            <div class="copyright text-center text-sm text-white text-lg-start">
              © 2025, Desarrollado por estudiantes de la Facultad de Sistemas. Todos los Derechos Reservados.
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <!--   Core JS Files   -->
  <script src="{{ asset('assets/front/assets/js/core/popper.min.js')}}" type="text/javascript"></script>
  <script src="{{ asset('assets/front/assets/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
  <script src="{{ asset('assets/front/assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
  <!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
  <script src="{{ asset('assets/front/assets/js/material-kit.min.js?v=3.1.0')}}" type="text/javascript"></script>
</body>

</html>