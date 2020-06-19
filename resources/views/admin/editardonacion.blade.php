@extends('app.plantilla')

@section('content')
<div class="card bg-secondary shadow">
	<h3>Tipo donación</h3>
	<div class="form-group">

		<br><br><br>
	<form action="{{ route('donacion.update', $donacion->id) }}" method="POST" class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
		@csrf
		@method('PATCH')
		<div class="col-lg-6">
			<h6 class="heading-small text-muted mb-4">Ingrese concepto</h6>
			
			<input type="text" name="concepto" class="form-control" value="{{ $donacion->concepto}}">
		</div>
		
		<div class="col-lg-6">
		<h6 class="heading-small text-muted mb-4">Ingrese Porcentaje</h6>
		
		<input type="text" name="porcentaje" class="form-control" value="{{ $donacion->porcentaje }}"><br>
		</div>

		<div class="col-lg-6">
			<div></div>
		<input type="submit" value="Actualizar" class="btn btn-outline-default">
	</div>
	</form>
@endsection