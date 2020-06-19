@extends('app/presencia')
@section('content')

<!-- content page -->
	<section class="bgwhite p-t-60">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-9 p-b-75 m-l-r-auto">
					<div class="p-r-50 p-r-0-lg">
						<!-- item blog -->
						<div class="item-blog-txt p-t-33">
								<h4 class="p-b-11 m-text24">
									
										Reseña de actividades, mantenimiento, mejora de áreas verdes de San Pedro Totoltepec <strong>2020</strong>
									
								</h4>
						</div>		


						@foreach($eventos as $even)
						<div class="item-blog p-b-80">
							<a href="#" class="item-blog-img pos-relative dis-block hov-img-zoom">
								<img src="{{asset('imagesEvento/'.$even->evento_image) }}">

								<span class="item-blog-date dis-block flex-c-m pos1 size17 bg4 s-text1">
									{{$even->evento_fecha}}
								</span>
							</a>

							<div class="item-blog-txt p-t-33">
								<h4 class="p-b-11">
									
										{{$even->evento_titulo}}
									
								</h4>

								<a href="{{ route('eventos.show', $even->id )}}" class="s-text20">
									Leer más 
								</a><br>
								<div class="filter-color p-t-22 p-b-50 bo3">

								<ul class="flex-w">
									<br>
								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter5" type="checkbox" name="color-filter5">
									<label class="color-filter color-filter5" for="color-filter5"></label>
								</li>
								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter5" type="checkbox" name="color-filter5">
									<label class="color-filter color-filter5" for="color-filter5"></label>
								</li>
								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter5" type="checkbox" name="color-filter5">
									<label class="color-filter color-filter5" for="color-filter5"></label>
								</li>
							</ul>

								@endforeach	

								<center>
									{{ $eventos->render()}}
								</center>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


		




@endsection