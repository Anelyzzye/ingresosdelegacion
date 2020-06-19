@extends('app.plantilla')
@section('content')
<!-- Dark table -->
      <div class="row mt-5">
        <div class="col">
          <div class="card bg-default shadow">
            <div class="card-header bg-transparent border-0">
              <h3 class="text-white mb-0">Lista de trámites</h3>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-dark table-flush">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Nombre tipo trámite</th>
                    <th scope="col">Clave trámite</th>
                    <th scope="col"> Costo</th>                 
                  </tr>
                </thead>
               
                <tbody>
                  <tr>
                    
                    <th scope="row">
                      <div class="media align-items-center">
                       
                        <div class="media-body">
                          <span class="mb-0 text-sm">  {{ $tramites->nombretipotramite }} </span>
                        </div>
                      </div>
                    </th>
                    <td>
                      {{ $tramites->clavetramite }}
                    </td>
                    <td>{{ $tramites->costo }}</td>
                     
                </tbody>
               
              </table>
            </div>
          </div>
        </div>
      </div>
@endsection