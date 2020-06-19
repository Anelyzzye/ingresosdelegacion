@extends('app.plantilla')
@section('content')
<!-- Dark table -->
      <div class="row mt-5">
        <div class="col">
          <div class="card bg-default shadow">
            <div class="card-header bg-transparent border-0">
              <h3 class="text-white mb-0">Registros tipo Ciudadano</h3>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-dark table-flush">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Concepto</th>
                    <th scope="col">Actualizar</th>
                    <th scope="col">Eliminar</th>                  
                  </tr>
                </thead>
                @foreach($tiposciudadanos as $tipo)
                <tbody>
                  <tr>
                    
                    <th scope="row">
                      <div class="media align-items-center">
                       
                        <div class="media-body">
                          <span class="mb-0 text-sm">{{ $tipo->tipociudadano }}</span>
                        </div>
                      </div>
                    </th>

                    <td>
                     <button type="button" class="btn btn-danger"><a href="{{ route('tipociudadano.edit', $tipo->id, $tipo->id) }}">Actualizar</a></button>
                    

                    </td>
                    <td>
                      <form action="{{ route('tipociudadano.delete', $tipo->id)}}" method="POST">
                          @method("DELETE")
                          @csrf
                          <input type="submit" class="btn btn-warning" value="Eliminar" disabled/>
          
                     </form>
                    <td>
                     
                </tbody>
                @endforeach
              </table>
            </div>
          </div>
        </div>
      </div>
        
      </script>
@endsection