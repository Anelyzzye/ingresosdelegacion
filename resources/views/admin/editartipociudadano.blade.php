@extends('app.plantilla')
@section('content')


<div class="card bg-secondary shadow">
	<h3>Perfil Ciudadano</h3>
	<div class="form-group">

		<br><br><br>
	<form method="POST"  action="{{ route('tipociudadano.update', $tipociud->id)}}" class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
		@csrf
		@method('PATCH')
		<div class="col-lg-6">
			<h6 class="heading-small text-muted mb-4">Ingrese Tipo ciudadano</h6>
				<input type="text" name="tipociudadano" class="form-control" value="{{ $tipociud->tipociudadano }}">
		</div>		
		<div class="col-lg-6">
			<input type="submit" value="Enviar" class="btn btn-outline-default">
		</div>
	</form>
@endsection