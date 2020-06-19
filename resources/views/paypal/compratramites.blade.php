@extends('layouts.app-paypal')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
			<div class="card-header bg-secondary">
				
			<div class="alert alert-secondary" role="alert">
              <center>
                <h1 class="display-4">Mis trámites comprados</h1>
              </center>
              <h4>
                 <strong>¡Selecciona tus trámite!</strong> Dando clic en 
               <strong>"Comprar"</strong>, al concluir tu selección en la parte superior se encontrará el boton de <strong>"Mis compras"</strong> para realizar la compra.</h4>
            </div>



            <div class="table-responsive">
    <div>
    <table class="table align-items-center">
        <thead class="thead-light">
            <tr>
                <th scope="col" class="sort" data-sort="name">Nombre del trámite</th>
                <th scope="col" class="sort" data-sort="budget">Precio</th>
                <th scope="col" class="sort" data-sort="status">Cantidad</th>
                <th scope="col">Total</th>
                
            </tr>
        </thead>
        <tbody class="list">
        	@if(Session::has('cart'))
        	@forelse ($products as $producto)
            
            <tr>
            	
                
                
                 <td class="budget">
                    {{$producto['item']['nombretipotramite']}}
                </td>
                <td class="budget" id="costopaypal">
                	{{$producto['item']['costo']}}
                </td>

                <td>
                	<div>
                		<a href="{{route('carrito.añadir',['id' => $producto['item']['id']])}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">+</a>
                		<input type="" name="" value="{{$producto['cantidad']}}" disabled id="cantidadpaypal">
                		<a href="{{route('carrito.remover',['id' => $producto['item']['id']])}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">-</a>

                	</div>
                </td>
                <td>
                	<div id="totalpaypal">${{ $producto['item']['costo'] * $producto['cantidad'] }}  ${{$producto['item']['precio']}}</div>
                </td>	
			</tr>


			 @empty
                            <tr>
                              
                                	
                                	<div class="alert alert-danger" role="alert">
    <strong>Usted no ha elegido ningun trámite</strong> 
</div>
                            </tr>
			@endforelse
			@else 
                        <tr class="budget">
                                          	<div class="alert alert-danger" role="alert">
    <strong>Usted no ha elegido ningun trámite</strong> 
</div>
        
                        </tr>
                    @endif
        </div>
        Total a pagar : ${{ !empty($totalPrecio) ? $totalPrecio : '0'}}
      	</div>
     </div> 	  
</div>              




@endsection