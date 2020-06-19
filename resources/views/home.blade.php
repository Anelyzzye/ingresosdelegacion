@extends('app.presencia')

@section('content')
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
    </style>
    <meta charset="utf-8">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-secondary">
                <table>
            <tr>
                <td>&nbsp; &nbsp;&nbsp;<img src="{{ asset('assets/img/brand/logo.png')}}" alt="...">&nbsp; &nbsp; &nbsp;</td>
                <td><h4>&nbsp;&nbsp;&nbsp;DELEGACIÓN DE SAN PEDRO TOTOLTEPEC&nbsp;&nbsp;&nbsp;</h4><br>
                    
                </td>
                <td>&nbsp; &nbsp; &nbsp;<img src="{{ asset('assets/img/brand/favicon.jpg')}}" alt="..."></td>
            </tr>
        </table>
       
                    

                <div class="card-header">¡Bienvenida al sistema de citas, <strong>
                    {{ Auth::user()->name }}  </strong> ! <br><br><br><br>

                   

                    <p style="text-align: justify;">
                        Estamos para mejorar los trámites de la comunidad, agradecemos tu confianza. <br><br>

                        ¿Cómo registro mi cita?:<br>
                        1.- Da clic en <strong>comenzar</strong><br>
                        2.- Ingresa los datos correspondientes (Trámite, día, hora)
                        Es importante llenar todos los campos de lo contrario no se podrá guardar tu cita. <br>
                        3.- Da clic en Generar Cita. <br>


                        <br>
                        Es importante:<br>
                        1.- Acudir a tu cita puntualmente, llegar 10 minutos antes de la hora estipulada. <br>
                        2.- Contar con IFE/INE actualizada, de lo contrario, acudir con con curp y comprobante de domicilio no mayor a 3 meses. 
                        <br>
                        <center>
                            <a href="{{ route('cita.create') }}">
                            <button class="btn btn-secondary" type="button">
    <span class="btn-inner--icon"><i class="ni ni-watch-time"> Agendar cita</i></span></a>
</button>
                        </center>

                            
                    </p>
               
                </div></div>


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
            </div>
            <div class="card-header bg-secondary">
                <p>Bienvenidos a la nueva sección</p>
                <p title="justify">
                    *Desde este momento se habilita la sección de pago de trámites, es importante una vez hagas el pago de tus trámites realices tu cita correspondiente, da clic en: <strong>Pago de trámites con paypal</strong>

                </p>
                <p>
                    <center>
                        <a href="{{ route('pagar.tramites')}}" target="_blank" >
                        <button class="btn btn-secondary" type="button">
    <span class="btn-inner--icon"><i class="ni ni-shop"> Pago trámites con Paypal</i></span>
</button></a>
<p>
        
             <li class="nav-item">
                 @if(Auth::check())
              <a class="btn btn-secondary" href="{{ route('perfil',['id'=> Auth::user()->id])}}">
                <i class="ni ni-notificacion-70"></i>
                <span class="nav-link-inner--text">Mi Compras</span>
              </a>
          </li>
               @else
               <li>
               <a class="nav-link nav-link-icon" href="{{ route('login')}}">
                <i class="ni ni-notificacion-70"></i>
                <span class="nav-link-inner--text">Iniciar sesion</span>
              </a>
              
            </li>
              @endif
</p>
                    </center>
                </p>
            </div>
<br>
        </div>
    </div>
</div>
@endsection
