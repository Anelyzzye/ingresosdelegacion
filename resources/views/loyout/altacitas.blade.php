@extends('layouts.app')

@section('content')
 <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-secondary">
                
	<div class="card-header">
		
		 <center>
		<h3 class="text-muted">
			@if(session()->has('msj'))
			<div class="alert alert-danger" role="alert">
 					{{ session('msj')}}
		</div>
		@endif
		</h3>
	

		<br><br><br>
	<form action="{{ route('cita.store') }}" method="POST">
		@csrf

		<div class="col-lg-6">
			<h6 class="heading-small text-muted mb-4">Seleccione su nombre</h6>
			
			<select class="form-control" name="user_id">
				@foreach($ciudadano as $c)
				<option value="{{ $c->id}}"> {{ $c->name }} {{$c->apellidopat }} {{ $c->apellidomat}} </option>
				@endforeach
			</select>
		</div>

		
		<div class="col-lg-6">
			<h6 class="heading-small text-muted mb-4">Ingrese día</h6>
			
			<input type="date" name="dia" class="form-control">
			@if($errors->any())
				<div class="alert-danger mb-4">
   			 		{{ $errors->first('dia') }}
				</div>
			@endif
		</div>
		
		<div class="col-lg-6">
		<h6 class="heading-small text-muted mb-4">Horas disponibles</h6>
		<select class="form-control" name="hora">
			<option>9:30am</option>
			<option>10:00am</option>
			<option>10:30am</option>
			<option>11:00am</option>
			<option>11:30am</option>
			<option>12:00am</option>
			<option>12:30am</option>
			<option>1:00am</option>
			<option>1:30am</option>
			<option>3:30am</option>
			<option>4:00am</option>
			<option>4:30am</option>
			<option>5:00am</option>
			<option>5:30am</option>
		</select>


		
		</div>
		<!--
		<div class="col-lg-6">
		<h6 class="heading-small text-muted mb-4">Hora Seleccionada</h6>
		<input type="text" name="hora" class="form-control" id="definir"><br>
		@if($errors->any())
				<div class="alert-danger mb-4">
   			 		{{ $errors->first('apellidomat') }}
				</div>
			@endif
		</div>
		-->
	

		<div class="col-lg-6">
		<h6 class="heading-small text-muted mb-4">Eliga el trámite a realizar </h6>
		<select class="form-control" name="tipotramites_id">
				@foreach($tramites as $t)
				<option value="{{ $t->id }}"> {{ $t->nombretipotramite }} </option>
				@endforeach
			</select><br>
		</div><br>
		
		<input type="submit" value="Guardar" class="btn btn-success" >
	</div>
	</form>
	</center>

	</div>
	

	
@endsection