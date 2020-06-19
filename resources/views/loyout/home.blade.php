@extends('layouts.app')

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
           
        </table>
       
                    

                <div class="card-header">¡Bienvenida al sistema de citas, <strong>
                    {{ Auth::user()->name  }} {{ Auth::user()->apellidopat}} </strong> ! <br><br><br><br>

                   

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
                        2.- Contar con IFE/INE actualizada, de lo contrario, acudir con curp y comprobante de domicilio no mayor a 3 meses. 
                        <br>
                          <center>
                            <button type="button" class="btn btn-default">
                                <a href="{{ route('cita.create') }}">
                                    Comenzar
                                </a>
                            </button>
                        </center><br>

                        <p>
                            *Estamos construyendo un nuevo apartado pensando en la facilidad de nuestros ciudadanos proximamente podrás pagar en línea tus trámites, para ello solo deberás dar clic en el siguiente botón, esto sucederá siempre y cuando el boton este habilitado.
                            <br>
                            <br>
                            <center>
                                <button class="btn btn-default" disabled>Pago de trámites en línea</button>
                            </center>

                              
                        </p>
                      

                            
                    </p>
               
                </div></div>


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
            </div>

        </div>
    </div>
</div>
@endsection
