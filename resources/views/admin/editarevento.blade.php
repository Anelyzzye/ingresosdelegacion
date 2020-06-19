@extends('app.plantilla')
@section('content')


<div class="card bg-secondary">
	<h3>Publicar un nuevo Evento: </h3>
	<div class="form-group">

		<br><br><br>
	<form action="{{ route('eventos.update', $eventos->id )}}" method="POST"   class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto" enctype="multipart/form-data" >
		@csrf
		@method('PATCH')
		<div class="col-lg-12">
			<h6 class="heading-small text-muted mb-4">Titulo del evento:</h6>
				<input type="text" name="evento_titulo" class="form-control" value="{{ $eventos->evento_titulo }}">
				@if($errors->any())
				<div class="alert-danger mb-4">
   			 		{{ $errors->first('evento_titulo') }}
				</div>
				@endif
		</div>
		<div class="col-lg-12">
			<br>
			<h6 class="heading-small text-muted mb-4">Texto del evento:</h6>
				
				<input  type="text" name="evento_texto" class="form-control" value="{{ $eventos->evento_texto }}">
                      	
               
				@if($errors->any())
				<div class="alert-danger mb-4">
   			 		{{ $errors->first('evento_texto') }}
				</div>
				@endif
		</div>	

		<div class="col-lg-12">
			<br>
			<h6 class="heading-small text-muted mb-4">Fecha de la publicación: </h6>
				<input type="date" name="evento_fecha" class="form-control" value="{{ $eventos->evento_fecha }}">
				@if($errors->any())
				<div class="alert-danger mb-4">
   			 		{{ $errors->first('evento_fecha') }}
				</div>
				@endif
		</div>

		<div class="col-lg-9">
			<br>
			<h6 class="heading-small text-muted mb-4">Imagen del evento:</h6>
				<input type="file" name="evento_image" class="form-control" value="{{ $eventos->evento_image }}">
				@if($errors->any())
				<div class="alert-danger mb-4">
   			 		{{ $errors->first('evento_image') }}
				</div>
				@endif
		</div>	
			
		<div class="col-lg-6">
			<br>
			<input type="submit" value="Enviar" class="btn btn-outline-success">
		</div>
	</form>
@endsection