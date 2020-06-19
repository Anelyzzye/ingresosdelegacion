@extends('layouts.app-paypal')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
			<div class="card-header bg-secondary">
				
					<div class="alert alert-secondary" role="alert">
              <center>
                <h1 class="display-4">Trámites disponibles</h1>
              </center>
              <h4>
                 <strong>¡Selecciona tus trámite!</strong> Dando clic en 
               <strong>"Comprar"</strong>, al concluir tu selección en la parte superior se encontrará el boton de <strong>"Mis compras"</strong> para realizar la compra.
                      </div>
              </h4>
						
			  <!-- Card stats -->

          <div class="row"> 
            
           @foreach($products as $product)
          <br><br>	
            <div class="col-xl-3 col-lg-6 mt-5">

              <div class="card card-stats mb-4 mb-xl-0">

                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0"></h5>
                      <span class="h2 font-weight-bold mb-0">{{ $product->name }}</span>
                    </div>
                    

                  </div>
                  <p class="col mt-5 mb-0 text-muted text-sm">
                    <span class="text-success mr-6"><i class="fa fa-arrow-up"></i> {{ number_format($product->price, 2) }} MXN</span>
                    
                  </p>

                  <div class="col mt-3">
          <a href="">  <button type="button" class="btn btn-outline-default">
  Detalles
</button></a>


					<a href="{{ route('add', [ $product->getRouteKey() ]) }}">
            <button class="btn btn-outline-success" type="button">
          Comprar
          </button>     
          </a>

        </div>
                  

                </div></div></div><br>@endforeach <br></div>
            </div><br></div>

			


    

    
</div>




@endsection