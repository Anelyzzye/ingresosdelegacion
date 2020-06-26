<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Ingresos y Egresos</title>
  <!-- Favicon -->
  <link href="{{ asset('assets/img/brand/favicon.jpg') }}" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="{{ asset('css/nucleo.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="{{ asset('css/argon.css') }}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">


    
  <style>
    
    .navbar-search-dark .form-control {
      color: black;
    }
    .bg-gradient-primary{
     background-image: url("{{ asset('assets/img/theme/home.png') }}");
     background-repeat: no-repeat;
     background-size: cover;
    }
    .bg-secondary{
     background-image: url("{{ asset('assets/img/theme/doble.png') }}");
     background-repeat: no-repeat;
     background-size: cover;
    }
  </style>
</head>

<body>
  <!-- Sidenav -->
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="#">
        <img src="{{ asset('assets/img/brand/logo.png') }}" class="navbar-brand-img" alt="...">
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ni ni-bell-55"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="{{ asset('assets/img/theme/team-1-800x800.jpg') }}">
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>My profile</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-settings-gear-65"></i>
              <span>Settings</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-calendar-grid-58"></i>
              <span>Activity</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-support-16"></i>
              <span>Support</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#!" class="dropdown-item">
              <i class="ni ni-user-run"></i>
              <span>Logout</span>
            </a>
          </div>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="./index.html">
                <img src="{{ asset('assets/img/brand/blue.png') }}">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->
        <form class="mt-4 mb-3 d-md-none">
          <div class="input-group input-group-rounded input-group-merge">
            <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fa fa-search"></span>
              </div>
            </div>
          </div>
        </form>
        <!-- Navigation -->
        <details>
          <summary>
             <i class="ni ni-tv-2 text-red mi-hoja"></i> Dashboard Ingresos y Egresos
          </summary>
          <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('cita.show')}}">
              <i class="ni ni-fat-add text-red"></i> Citas
            </a>
          </li>
          
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('bitacora.create')}}">
              <i class="ni ni-bullet-list-67 text-red"></i> Bitacora
            </a>
          </li>
            </ul>
          </details>
          <!-- Divider -->
        <hr class="my-3">
        <!-- Heading 
        <h6 class="navbar-heading text-muted">CRUD</h6>-->
        <!-- Navigation -->
        <details>
        	<summary>
        		 <i class="ni ni-tv-2 text-green mi-hoja"></i> Dashboard publicaciones pág. web
        	</summary><br>
        	<ul class="navbar-nav mb-md-3">
          <li class="nav-item">
            <a class="nav-link" href="{{route('avisos.create')}}">
              <i class="ni ni-image text-blue"></i> Sección avisos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('eventos.create') }}">
              <i class="ni ni-notification-70 text-blue"></i> Sección noticias
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('ventas') }}">
              <i class="ni ni-world text-blue"></i> Mis ventas
            </a>
          </li>
        </details>	

        <!-- Divider -->
        <hr class="my-3">
        <!-- Heading 
        <h6 class="navbar-heading text-muted">CRUD</h6>-->
        <!-- Navigation -->
          <details>
            <summary>
              <i class="ni ni-tv-2 text-purple mi-hoja"></i> Recursos adicionales
            </summary><br>
          
      

        
        
          
         
      
        <ul class="navbar-nav mb-md-3">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('ciudadano.create') }}">
              <i class="ni ni-circle-08 text-success"></i> Usuarios
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('donacion.create') }}">
              <i class="ni ni-tag text-success"></i> Donacion
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('tipotramite.create') }}">
              <i class="ni ni-single-copy-04 text-success" ></i> Trámite
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('tipociudadano.create')}}">
              <i class="ni ni-badge text-success"></i> Tipo Ciudadano
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('egresos.create') }}">
              <i class="ni ni-fat-delete text-success"></i> Egresos
            </a>
          </ul>
        </details>
        
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content">
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        
       
        <!-- Form -->
        <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative">
              
              
              
            </div>
          </div>
        </form>
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="{{ asset('assets/img/theme/logo.png') }}">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold">Historial de registros</span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
               
              </div>
              <a href="{{route('tipociudadano.index') }}" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>Panel tipo ciudadano</span>
              </a>
              <a href="{{ route('tramites')}}" class="dropdown-item">
                <i class="ni ni-settings-gear-65"></i>
                <span>Panel trámites</span>
              </a>
               <a href="{{ route('cita.show')}}" class="dropdown-item">
                <i class="ni ni-settings-gear-65"></i>
                <span>Panel Citas</span>
              </a>
              <a href="{{ route('donacion') }}" class="dropdown-item">
                <i class="ni ni-support-16"></i>
                <span>Panel tipo donación</span>
              </a>
              <a href="{{ route('avisos') }}" class="dropdown-item">
                <i class="ni ni-support-16"></i>
                <span>Panel Avisos</span>
              </a>
              <a href="{{ route('eventos') }}" class="dropdown-item">
                <i class="ni ni-support-16"></i>
                <span>Panel Eventos</span>
              </a>



              
              <div class="dropdown-divider"></div>
              <a href="{{route('aviso.index')}}" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8" id="encabezado">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-10 mb-5 mb-xl-0">
          
        	 <!-- Aquí va el contenido -->

        	 @yield('content')


























































           

          </div>
        </div>

   
    




         <footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-3">
            <div class="copyright text-center text-xl-left text-muted">
               <a href="#" class="font-weight-bold ml-1" target="_blank"></a>
            </div>
          </div>
          <!-- <div class="col-xl-3">
          
              <li class="nav-link"> &copy; 2019| Anne </li>
          
            </ul>
          </div>
        </div>-->





      </footer>
</body>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <!-- Optional JS -->
  <!-- Argon JS -->
  <script src="{{ asset('assets/js/argon.js') }}"></script>
  
  <script src="{{asset('js/jquery-ui.js')}}"></script>
  <script src="{{ asset('js/jquery-3.3.1.min.js')}}"></script>
      <script src="{{ asset('js/jquery-ui.js')}}"></script>
      <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
         <script>
        $(document).ready(function() {
         $('#lacita').DataTable();
          });
      </script>


</html>