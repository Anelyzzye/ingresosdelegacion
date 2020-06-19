@extends('app.plantilla')

@section('content')
<div class="card bg-secondary shadow">
	<h3>Registro Ingresos</h3>
	<div class="form-group">

		<br><br><br>
	<form action="" method="POST" class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
		@csrf

		<div class="col-lg-6">
			<h6 class="heading-small text-muted mb-4">Fecha</h6>
			
			<input type="date" name="diaingreso" class="form-control" value="{{$dinero->dia->toDateString()}}" disabled>
			@if($errors->any())
				<div class="alert-danger mb-4">
   			 		{{ $errors->first('diaingreso') }}
				</div>
			@endif
		</div>


		<div class="col-lg-6">
		<h6 class="heading-small text-muted mb-4">Persona cita</h6>
		<select class="form-control" name="tipociudadanos_id" disabled>
			
			<option value="{{ $dinero->id }}">
				@foreach($users as $u)
				{{ $u->name}} {{ $u->apellidopat}}</option>
				@endforeach

		</select> 
		@if($errors->any())
				<div class="alert-danger mb-4">
   			 		{{ $errors->first('tipociudadanos_id') }}
				</div>
			@endif
		</div>


	<div class="col-lg-6">
		<br>
		<h6 class="heading-small text-muted mb-4">Trámite</h6>
	
		<select class="form-control" name="tipotr_id" disabled class="form-control">
			<option value="{{ $dinero->tipotramites_id }}"> 
			@foreach($users as $us)
				{{ $us->tramite}}</option>
			@endforeach
		</select>
		
		@if($errors->any())
				<div class="alert-danger mb-4">
   			 		{{ $errors->first('tipociudadanos_id') }}
				</div>
			@endif
		</div>



	<div class="col-lg-6">
		<br>
			<h6 class="heading-small text-muted mb-4">Costo trámite</h6>
			@foreach($users as $usc)
				<input type="number" id="costo" name="costo" value="{{ $usc->costo}}" disabled class="form-control">
			@endforeach
			
			
		</div>


	<div class="col-lg-6">
			<h6 class="heading-small text-muted mb-4">Aplica donación</h6>
		<select id="porcentaje" class="form-control" name="tipociudadanos_id" class="form-control">
			@foreach($porcentaje as $porcentaje)
				<option   value="{{ $porcentaje->id}}"> {{$porcentaje->concepto}}</option>
			@endforeach
		</select>
		@if($errors->any())
				<div class="alert-danger mb-4">
   			 		{{ $errors->first('tipociudadanos_id') }}
				</div>
			@endif

	</div>



	<div class="col-lg-8">
		<br>
			<h6 class="heading-small text-muted mb-4">Porcentaje a aplicar:</h6>
			
				<input type="text" id="aplicado"  value="" disabled class="form-control">
			
			
			
		</div>

		<div class="col-lg-8">
			<br>
			<h6 class="heading-small text-muted mb-4">Total</h6>
			
			<input id="total" type="text" name="diaingreso" class="form-control">
			@if($errors->any())
				<div class="alert-danger mb-4">
   			 		{{ $errors->first('diaingreso') }}
				</div>
			@endif
		</div>
	
	


	

	


		

		<div class="col-lg-8">
			<div></div>
			<br>
		<input type="submit" value="Guardar" class="btn btn-outline-success">
	</div>

	</form>

	<script>
		let porcentaje = document.getElementById("porcentaje")
		let aplicado = document.getElementById("aplicado")
		let costo = document.getElementById("costo")
		let total = document.getElementById("total")
		let csrf       = document.querySelector("input[name='_token']")


		//es que si esta ruta solo es para llenar entonces esta mal identificada
		/*
			Es decir con el cambio que te dije el otro día solo debe ser get y no tiene por que decir edit por que en realidad no vas a editar nada de primer momento, solo vas a llenar un input

			Entonces esta ruta solo debería ser aquella que filtra por id

			localhost/algo/1 y de esa manera filtramos y llenamos

			¿Revisaste los cambios que subi al repositorio?

			Ya no pero te explico como lo resolvi o como deberia hacerlo

		*/
		porcentaje.addEventListener("change", () =>{
			let id = porcentaje.options[porcentaje.selectedIndex].value
			// let info = new FormData()
			// info.append("id", id)
			fetch(`http://localhost:8000/mostrar-porcentaje/${id}`,{
				// headers:{
    //                 'X-CSRF-TOKEN': csrf.value
    //             },
			}).then(response => response.json())
			.then(data => {
				
				let pago = parseInt(costo.value)
				console.log(pago)
				let porcen = parseInt(data.porcentaje)
				console.log(porcen)

				let res = ((pago * porcen)/100)
				let final = pago - res
				console.log(porcen)
				
				aplicado.value = data.porcentaje
				total.value = final
				console.log(data)
			})//finde la promesa


		})//Fin listener
		
	</script>
@endsection