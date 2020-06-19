@extends('app.plantilla')

@section('content')
<div class="card bg-secondary shadow">
	<h3>Tipo donación</h3>
	<div class="form-group">

		<br><br><br>
	<form action="{{ route('donacion.store') }}" method="POST" class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
		@csrf
		<div class="col-lg-6">
			<h6 class="heading-small text-muted mb-4">Ingrese concepto</h6>
			<input type="text" name="concepto" class="form-control">
			@if($errors->any())
				<div class="alert-danger mb-4">
   			 		{{ $errors->first('concepto') }}
				</div>
			@endif
		</div>
		
		<div class="col-lg-6">
		<h6 class="heading-small text-muted mb-4">Ingrese Porcentaje</h6>
		
		<input type="text" name="porcentaje" class="form-control"><br>
		@if($errors->any())
				<div class="alert-danger mb-4">
   			 		{{ $errors->first('porcentaje') }}
				</div>
			@endif
		</div>

		<div class="col-lg-6">
			<div></div>
		<input type="submit" value="Guardar" class="btn btn-outline-default">
	</div>
	</form>
@endsection