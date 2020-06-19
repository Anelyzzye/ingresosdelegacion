<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style type="text/css">
        img{
            width: 120px;
            height: 90px;
        }
        h4{
            text-align: center;
            margin-top: 17px;
            font-family: arial, century gothic;
        }
        hr{
            width: 100%;
            background-color: #562449;
            height: 6px;
            border-radius: 8px;

        }
        h6{
            text-align: center;
            margin-top: 0px;
        }
        .conteiner{
            margin: auto;
        }
        table{
            width: 100%;
            text-align: left;
            border-collapse: collapse;
            margin-top: 50px;
        }
        th, td{
            padding: 10;

        }
        thead{
            background-color: #9D2449;
            border-bottom: solid 2px #00;
            color: white;
        }
        tr:nth-child(even){
            background-color: #D4C19C;
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
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Nuevo') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
         <table>
            <tr>
                <td>&nbsp; &nbsp;&nbsp;<img src="{{ asset('assets/img/brand/logo.png')}}" alt="...">&nbsp; &nbsp; &nbsp;</td>
                <td><h4>&nbsp;&nbsp;&nbsp;DELEGACIÓN DE SAN PEDRO TOTOLTEPEC&nbsp;&nbsp;&nbsp;</h4><br>
                    
                </td>
                <td>&nbsp; &nbsp; &nbsp;<img src="{{ asset('assets/img/brand/favicon.jpg')}}" alt="..."></td>
            </tr>
        </table>
        <div>
           
        </div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

<script>
        let hora = document.getElementById("hora");
        let definir = document.getElementById("definir");

        hora.addEventListener("change", () => {
            let texto = hora.options[hora.selectedIndex].text 
            definir.value = texto
        })
        
    </script>
</html>
