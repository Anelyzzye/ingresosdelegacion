@extends('app.plantilla')

@section('content')
<div class="card bg-secondary shadow">
	<h3>Trámites</h3>
	<div class="form-group">
		<br><br><br>
	<form action="{{ route('tipotramite.store') }}" method="POST" class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
		@csrf
		<div class="col-lg-6">
			<h6 class="heading-small text-muted mb-4">Ingrese nombre del trámite</h6>
			<input type="text" name="nombretipotramite" class="form-control">
			@if($errors->any())
				<div class="alert-danger mb-4">
   			 		{{ $errors->first('nombretipotramite') }}
				</div>
			@endif
		</div>
		<div class="col-lg-6">
			<h6 class="heading-small text-muted mb-4">Ingrese clave del trámite</h6>
			<input type="text" name="clavetramite" class="form-control">
			@if($errors->any())
				<div class="alert-danger mb-4">
   			 		{{ $errors->first('clavetramite') }}
				</div>
			@endif
		</div>
		<div class="col-lg-6">
			<h6 class="heading-small text-muted mb-4">Ingrese costo del trámite</h6>
			<input type="text" name="costo" class="form-control">
			@if($errors->any())
				<div class="alert-danger mb-4">
   			 		{{ $errors->first('costo') }}
				</div>
			@endif
		</div>	

		<div class="col-lg-6">		
			<input type="submit" value="Guardar" class="btn btn-outline-default">
		</div>	
	
	</form>
	<br><br>
</div>	

@endsection