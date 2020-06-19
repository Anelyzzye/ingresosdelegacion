@extends('app.plantilla')

@section('content')
<div class="card bg-secondary">
	<h3>Registro Usuario</h3>
	<div class="form-group">

		<br><br><br>
	<form action="{{ route('ciudadano.store') }}" method="POST" class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
		@csrf
		<div class="col-lg-6">
			<h6 class="heading-small text-muted mb-4">Ingrese nombres</h6>
			
			<input type="text" name="nombres" class="form-control">
			@if($errors->any())
				<div class="alert-danger mb-4">
   			 		{{ $errors->first('nombres') }}
				</div>
			@endif
		</div>
		
		<div class="col-lg-6">
		<h6 class="heading-small text-muted mb-4">Ingrese apellido paterno</h6>
		<input type="text" name="apellidopat" class="form-control"><br>
		@if($errors->any())
				<div class="alert-danger mb-4">
   			 		{{ $errors->first('apellidopat') }}
				</div>
			@endif
		</div>

		<div class="col-lg-6">
		<h6 class="heading-small text-muted mb-4">Ingrese apellido materno</h6>
		<input type="text" name="apellidomat" class="form-control"><br>
		@if($errors->any())
				<div class="alert-danger mb-4">
   			 		{{ $errors->first('apellidomat') }}
				</div>
			@endif
		</div>

		<div class="col-lg-6">
		<h6 class="heading-small text-muted mb-4">Ingrese nombre de la calle</h6>
		<input type="text" name="calle" class="form-control"><br>
		@if($errors->any())
				<div class="alert-danger mb-4">
   			 		{{ $errors->first('calle') }}
				</div>
			@endif
		</div>

		<div class="col-lg-6">
		<h6 class="heading-small text-muted mb-4">Ingrese numero exterior</h6>
		<input type="text" name="numeroext" class="form-control"><br>
		@if($errors->any())
				<div class="alert-danger mb-4">
   			 		{{ $errors->first('numeroext') }}
				</div>
			@endif
		</div>

		<div class="col-lg-6">
		<h6 class="heading-small text-muted mb-4">Ingrese numero interior</h6>
		<input type="text" name="numeroint" class="form-control"><br>
		@if($errors->any())
				<div class="alert-danger mb-4">
   			 		{{ $errors->first('numeroint') }}
				</div>
			@endif
		</div>

		


		<div class="col-lg-6">
		<h6 class="heading-small text-muted mb-4">Ingrese código postal</h6>
		<input type="text" name="cpostal" class="form-control"><br>
		@if($errors->any())
				<div class="alert-danger mb-4">
   			 		{{ $errors->first('cpostal') }}
				</div>
			@endif
		</div>

		<div class="col-lg-6">
		<h6 class="heading-small text-muted mb-4">Ingrese colonia</h6>
		<input type="text" name="colonia" class="form-control"><br>
		@if($errors->any())
				<div class="alert-danger mb-4">
   			 		{{ $errors->first('colonia') }}
				</div>
			@endif
		</div>

		<div class="col-lg-6">
		<h6 class="heading-small text-muted mb-4">Ingrese Email</h6>
		<input type="email" name="email" class="form-control"><br>
		@if($errors->any())
				<div class="alert-danger mb-4">
   			 		{{ $errors->first('email') }}
				</div>
			@endif
		</div>

		<div class="col-lg-6">
		<h6 class="heading-small text-muted mb-4">Ingrese Password</h6>
		<input type="password" name="password" class="form-control"><br>
		@if($errors->any())
				<div class="alert-danger mb-4">
   			 		{{ $errors->first('password') }}
				</div>
			@endif
		</div>

		<div class="col-lg-6">
		<h6 class="heading-small text-muted mb-4">Ingrese Password</h6>
		<input type="password" name="password_confirmation" class="form-control"><br>
		</div>

		<div class="col-lg-6">
		
		<input type="hidden" name="status" class="form-control" value="0"><br>

		</div>

		<div class="col-lg-6">
		<h6 class="heading-small text-muted mb-4">Ingrese su perfil de usuario</h6>
		<select class="form-control" name="tipociudadanos_id">
			@foreach($tipociudadano as $tipo)
				<option   value="{{ $tipo->id }}">{{ $tipo->tipociudadano }}</option>
			@endforeach
		</select>
		@if($errors->any())
				<div class="alert-danger mb-4">
   			 		{{ $errors->first('tipociudadanos_id') }}
				</div>
			@endif
		</div>

		<div class="col-lg-6">
			<div></div>
		<input type="submit" value="Guardar" class="btn btn-outline-default">
	</div>

	</form>
@endsection