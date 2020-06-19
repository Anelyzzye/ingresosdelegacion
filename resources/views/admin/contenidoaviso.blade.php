@extends('app.plantilla')
@section('content')
<!-- Dark table -->
      <div class="row mt-5">
        <div class="col">
          <div class="card bg-default shadow">
            <div class="card-header bg-transparent border-0">
              <h3 class="text-white mb-0">Titulo del aviso: {{ $aviso->aviso_titulo }}</h3>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-dark table-flush">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Link</th>
                    <th scope="col">Imagen</th>                 
                  </tr>
                </thead>
               
                <tbody>
                  <tr>
                    
                    <th scope="row">
                      <div class="media align-items-center">
                       {{$aviso->aviso_link}}
                        <div class="media-body">
                          <span class="mb-0 text-sm">  </span>
                        </div>
                      </div>
                    </th>
                    <td>
                    	<img src="{{asset('imagesAviso/'.$aviso->aviso_image)}}" 
                     
                    </td>
                     
                </tbody>
               
              </table>
            </div>
          </div>
        </div>
      </div>
@endsection