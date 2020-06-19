@extends('app.plantilla')

@section('content')
<div class="card bg-secondary shadow">
	<h3>Trámites</h3>
	<div class="form-group">
		<br><br><br>
	<form action=" {{ route('tipotramite.update', $tramites->id) }}" method="POST" class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
		@csrf
		@method('PATCH')
		<div class="col-lg-6">
			<h6 class="heading-small text-muted mb-4">Ingrese nombre del trámite</h6>
			<input type="text" name="nombretipotramite" class="form-control" value="{{ $tramites->nombretipotramite }}">
		</div>
		<div class="col-lg-6">
			<h6 class="heading-small text-muted mb-4">Ingrese clave del trámite</h6>
			<input type="text" name="clavetramite" class="form-control" value="{{ $tramites->clavetramite}}">
		</div>
		<div class="col-lg-6">
			<h6 class="heading-small text-muted mb-4">Ingrese costo del trámite</h6>
			<input type="text" name="costo" class="form-control" value="{{ $tramites->costo }}">
		</div>	

		<div class="col-lg-6">		
			<input type="submit" value="Guardar" class="btn btn-outline-default">
		</div>	
		
	</form>
	<br><br>
</div>	

@endsection