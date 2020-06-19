@extends('app.plantilla')
@section('content')
<!-- Dark table -->
      <div class="row mt-5">
        <div class="col">
          <div class="card bg-default shadow">
            <div class="card-header bg-transparent border-0">
              <h3 class="text-white mb-0">tipo donaciones</h3>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-dark table-flush">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Concepto</th>
                    <th scope="col">Porcentaje</th>                 
                  </tr>
                </thead>
               
                <tbody>
                  <tr>
                    
                    <th scope="row">
                      <div class="media align-items-center">
                       
                        <div class="media-body">
                          <span class="mb-0 text-sm">  {{ $donados->concepto }} </span>
                        </div>
                      </div>
                    </th>
                    <td>
                      {{ $donados->porcentaje }}
                    </td>
                     
                </tbody>
               
              </table>
            </div>
          </div>
        </div>
      </div>
@endsection