<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="{{ asset('assets/img/brand/logovector.png') }}" rel="icon" type="image/png">

<!--Immportante-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/themify-icons.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css')}}">
<!--===============================================================================================-->
<!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="{{ asset('css/nucleo.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="{{ asset('css/argon.css') }}" rel="stylesheet">
 
  <style>
  	.imgn{
			width: 120px;
			height: 120px;
		}
  	.select-css {
	display: block;
	font-size: 16px;
	font-family: 'Arial', sans-serif;
	font-weight: 400;
	color: #444;
	line-height: 1.3;
	padding: .4em 1.4em .3em .8em;
	width: 400px;
	max-width: 100%; 
	box-sizing: border-box;
	margin: 0;
	border: 1px solid #aaa;
	box-shadow: 0 1px 0 1px rgba(0,0,0,.03);
	border-radius: .3em;
	-moz-appearance: none;
	-webkit-appearance: none;
	appearance: none;
	background-color: #fff;
	background-repeat: no-repeat, repeat;
	background-position: right .7em top 50%, 0 0;
	background-size: .65em auto, 100%;
}
.select-css::-ms-expand {
	display: none;
}
.select-css:hover {
	border-color: #888;
}
.select-css:focus {
	border-color: #aaa;
	box-shadow: 0 0 1px 3px rgba(59, 153, 252, .7);
	box-shadow: 0 0 0 3px -moz-mac-focusring;
	color: #222; 
	outline: none;
}
.select-css option {
	font-weight:normal;
}
    .navbar-search-dark .form-control {
      color: black;
    }
      .bg-gradient-primary{
     background-image: url("{{ asset('assets/img/theme/sitio.png') }}");
     background-repeat: no-repeat;
     background-size: cover;
    }
    .bg-secondary{
      background-image: url("{{ asset('assets/img/theme/copia.png') }}");
     background-repeat: no-repeat;
     background-size: cover;
    }
    .bg-title-page{
    	background-image: url("{{ asset('assets/img/theme/quienes.png') }}");
     background-repeat: no-repeat;
     background-size: cover;
    }
    .bg-footer{
    background-image: url("{{ asset('assets/img/theme/footer.png') }}");
     background-repeat: no-repeat;
     background-size: cover;
    }
      .bg-tram{
    background-image: url("{{ asset('assets/img/theme/home2.png') }}");
     background-repeat: no-repeat;
     background-size: cover;
    }
 
 
  </style>
</head>
<body class="bg-default">

	
		
 <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
      <div class="container px-4">
        <a class="navbar-brand" href="#">
          <img src="{{ asset('assets/img/brand/logovector.png') }}" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-collapse-main">
          <!-- Collapse header -->
          <div class="navbar-collapse-header d-md-none">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="#">
                  <img src="{{ asset('assets/img/brand/favicon.jpg') }}">
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
          <!-- Navbar items -->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="{{ route('aviso.index')}}">
                <i class="ni ni-button-play"></i>
                <span class="nav-link-inner--text">Inicio</span>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link nav-link-icon" href="{{ route('quienes.sitio')}}">
                <i class="ni ni-spaceship"></i>
                <span class="nav-link-inner--text">¿Quiénes somos?</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="{{ route('tramites.sitio')}}">
                <i class="ni ni-single-copy-04"></i>
                <span class="nav-link-inner--text">Trámites</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="{{route('contacto.sitio')}}">
                <i class="ni ni-square-pin"></i>
                <span class="nav-link-inner--text">Contáctanos</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="{{ route('eventos.index')}}">
                <i class="ni ni-notificacion-70"></i>
                <span class="nav-link-inner--text">Noticias</span>
              </a>
            </li>
             
         
           
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->















	<!-- Title Page -->
	<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m">
		<h2 class="l-text2 t-center">
			Delegación Municipal San Pedro Totoltepec
		</h2>
		<p class="m-text13 t-center">
			2019 - 2021
		</p>
	</section>
	
	
		
		
	

	@yield('content')



	


	<!-- Footer -->
	<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
		<div class="flex-w p-b-90">
			<div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					<img class="imgn" src="{{ asset('assets/img/brand/fb.png') }}" />
				</h4>
					Facebook
				</h4>

				<div>
					<p class="s-text7 w-size27">
						<i class="ni ni-active-40"></i>
						<a href="https://www.facebook.com/San-Pedro-TotoltepecDelegaci%C3%B3n-2019-2021-Unidad-y-transformaci%C3%B3n-343511072928129/" >Siguenos</a>
					</p>

					
				</div>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Cargo
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Primer Delegado
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Segundo delegado
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Tercer Delegado
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Primer suplente
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Segundo suplente
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Tercer suplente
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Nombre
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Juan Abad Morales
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Roberto Flores
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Angel Díaz
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Grisela Bernal
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Mónica Andres
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Martha Flores
						</a>
					</li>


				</ul>
			</div>

			

			<div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					Acceso administrativo
				</h4>

				<form action="{{ route('ingresar.sesion')}}" method="POST">
					@csrf
					<div class="effect1 w-size9">
						<input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="email@example.com">
						<span class="effect1-line"></span>
					</div>
					<div class="effect1 w-size9">
						<input class="s-text7 bg6 w-full p-b-5" type="password" name="password" placeholder="contraseña">
						<span class="effect1-line"></span>
					</div>

					<div class="w-size2 p-t-20">
						<!-- Button -->
						<input type="submit" class=" size2 bg4 tag-item hov1 m-text3 trans-0-4" target="_blank" value="Ingresar">
							
						
					</div>

				</form>

				 <a class="btn btn-link" href="{{ route('recuperar') }}">
                                        {{ __('¿Olvidaste tú contraseña?') }}
                                    </a>
			</div>
		</div>

	
	</footer>



	
	



<!--Importantes-->
<script type="text/javascript" src=" {{ asset('js/jquery-3.2.1.min.js')}}"></script>
	

	<script  src="{{ asset('js/slick.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('js/slick-custom.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{ asset('js/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{ asset('js/lightbox.min.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{ asset('js/sweetalert.min.js')}}"></script>


<!--===============================================================================================-->
	<script src="{{ asset('js/main.js') }}"></script>
	<!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <!-- Optional JS -->
  <!-- Argon JS -->
  <script src="{{ asset('assets/js/argon.js') }}"></script>
  <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
	<script src="{{asset('js/jquery-ui.js')}}"></script>

</body>
</html>
