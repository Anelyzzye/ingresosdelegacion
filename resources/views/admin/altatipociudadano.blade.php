@extends('app.plantilla')
@section('content')


<div class="card bg-secondary">
	<h3>Perfil Ciudadano</h3>
	<div class="form-group">

		<br><br><br>
	<form action="{{ route('tipociudadano.store') }}" method="POST"   class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
		@csrf
		<div class="col-lg-6">
			<h6 class="heading-small text-muted mb-4">Ingrese Tipo ciudadano</h6>
				<input type="text" name="tipociudadano" class="form-control">
				@if($errors->any())
				<div class="alert-danger mb-4">
   			 		{{ $errors->first('tipociudadano') }}
				</div>
				@endif
		</div>	
			
		<div class="col-lg-6">
			<input type="submit" value="Enviar" class="btn btn-outline-default">
		</div>
	</form>
@endsection