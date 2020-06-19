@extends('app/presencia')
@section('content')

<!-- content page -->
<section class="bgwhite p-t-66 p-b-38">
		<div class="container">
			<div class="row">
				<div class="col-md-4 p-b-30">
					<div class="hov-img-zoom">
						<img src="{{asset('imagesEvento/'.$eventus->evento_image)}}">
					</div>
				</div>

				<div class="col-md-8 p-b-30">
					<h3 class="m-text26 p-t-15 p-b-16">
										{{$eventus->evento_titulo}}
						
					</h3> 
					<p><a href="{{ route('eventos.index' )}}" class="s-text40">
									Explorar más noticias
								</a></p>

					

					<div class="bo13 p-l-29 m-l-9 p-b-10">
						<p class="p-b-11">
							{{$eventus->evento_texto}}
						</p>

						<span class="s-text7">
							<button></button>
						</span>
					</div>
				</div>
			</div>
		</div>
	</section>


		




@endsection