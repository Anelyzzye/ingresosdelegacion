@extends('app/presencia')
@section('content')
<!-- Banner -->
	<section class="banner bgwhite p-t-40 p-b-40">
		<div class="container">
			<div class="row">
				
				<div class="col-sm-10 col-md-8 col-lg-6 m-l-r-auto">

	<h1>Avisos a la comunidad de San Pedro Tototepec</h1>
				@foreach($avisos as $av)
					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="{{asset('imagesAviso/'.$av->aviso_image)}}">


						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a href="{{ $av->aviso_link}}" target="_blank" class="flex-c-m tag-item size2 m-text2 bg3 hov1 trans-0-4">
								Conoce más
							</a>
						</div>
					</div>
			@endforeach	
			
				 <center>
				 {{ $avisos->render()}}
			</center>
			
		</div>
			
					 
					
			</div>
	</section>

@endsection