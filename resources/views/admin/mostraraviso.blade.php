@extends('app.plantilla')
@section('content')
<div class="card bg-secondary">
	<section class="banner bgwhite p-t-40 p-b-40">
		<div class="container">
			<div class="row">
				
				<div class="col-sm-10 col-md-8 col-lg-6 m-l-r-auto">

	<h4>Como se mostrará tu publicación:</h4>

				@foreach($avisos as $av)
					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="imagesAviso/{{$av->aviso_image}}">


						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<br>
							<a href="{{ $av->aviso_link}}" target="_blank" class="btn btn-outline-success">
								Conoce más
							</a>
							<br>
						</div>
					</div>
			@endforeach	
			<center>
				<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<br>
							<a href="{{ route('aviso.index')}}" target="_blank" class="btn btn-outline-primary">
								Ver publicado
							</a>
							<br>
												</div>
				 
			</center>
		</div>
			
				
					
			</div>
	</section>
</div>	

@endsection