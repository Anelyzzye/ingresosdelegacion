@extends('app.plantilla')
@section('content')


<div class="card bg-secondary">
	<h3>Publicar un nuevo Aviso</h3>
	<div class="form-group">

		<br><br><br>
	<form action="{{ route('aviso.update', $avisospub->id) }}" method="POST"   class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto" enctype="multipart/form-data" >
		@csrf
		@method('PATCH')
		<div class="col-lg-12">
			<h6 class="heading-small text-muted mb-4">Titulo del aviso:</h6>
				<input type="text" name="aviso_titulo" class="form-control" value="{{$avisospub->aviso_titulo}}">
				@if($errors->any())
				<div class="alert-danger mb-4">
   			 		{{ $errors->first('aviso_titulo') }}
				</div>
				@endif
		</div>
		<div class="col-lg-12">
			<br>
			<h6 class="heading-small text-muted mb-4">Link:</h6>
				<input type="text" name="aviso_link" class="form-control" value="{{ $avisospub->aviso_link}}">
				@if($errors->any())
				<div class="alert-danger mb-4">
   			 		{{ $errors->first('aviso_link') }}
				</div>
				@endif
		</div>	

		<div class="col-lg-9">
			<br>
			<h6 class="heading-small text-muted mb-4">Flyer del aviso :</h6>
				<input type="file" name="aviso_image" class="form-control" value="{{ $avisospub->aviso_image }}>
				@if($errors->any())
				<div class="alert-danger mb-4">
   			 		{{ $errors->first('aviso_image') }}
				</div> <br>
				@endif
		</div>	
			
		<div class="col-lg-6">
			<br>
			<input type="submit" value="Enviar" class="btn btn-outline-success">
		</div>
	</form>
@endsection