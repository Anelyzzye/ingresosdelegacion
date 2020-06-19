
@extends('layouts.app-paypal')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card-header bg-secondary">

                <div class="modal-header">
                <center>
                <h3 class="modal-title mt-2">Mis compras</h3>
              </center>

        
            
            
            
       
                
            </div>
            
            <div class="modal-body">
            	
                      <table border="1">
        <caption>Mis compras</caption>
        <tr>
            <th>id</th>
            <th>Numero de orden</th>
            <th>Producto</th>
            <th>Precio</th>
            <th>Metodo Pago</th>
            <th>Cantidad</th>
        </tr>
        @foreach($ordenes as $suborder)
        <tr>
             
            <td>{{$suborder->id}}</td>
            <td>{{$suborder->order_id}}</td>
            <td>{{$suborder->product->name}}</td>
            <td>{{$suborder->price}}</td>
            <td>{{$suborder->payment}}</td>
            <td>{{$suborder->quantity}}</td>
        </tr>
          @endforeach
        </table>
                
            </div>
            
            <div class="modal-footer">
               <a href="{{ route('paypal.index')}}">
                    <button type="button" class="btn btn-white">Volver</button>
               </a>
                
            </div>
            
        </div> </div></div></div>
 



            @endsection