
@extends('layouts.app-paypal')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card-header bg-secondary">

                <div class="modal-header">
                <center>
                <h3 class="modal-title mt-2">Detalles del trámite</h3>
              </center>
                
        
                
            </div>
            
            <div class="modal-body">
            	
                <div class="py-3 text-center">
                    <i class="ni ni-bell-55 ni-3x"></i>
                    <h2 class="heading mt-3">{{$tram->nombretipotramite}}</h2>
                    <p>{{$tram->requisitos}}</p>
                    <p>
                        *No cuenta con el INE por ser menor de edad ó no tener direción actualizada presentar:
                    
                        <li>CURP</li>
                        <li>Comprobante de domicilio ó IFE (Papá o Mamá)
                    </p>
                </div>
                
            </div>
            
            <div class="modal-footer">
               <a href="{{ route('paypal.index')}}">
                    <button type="button" class="btn btn-white">Volver</button>
               </a>
                
            </div>
            
        </div> </div></div></div>
 



            @endsection