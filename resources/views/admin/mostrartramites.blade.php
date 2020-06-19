@extends('app.plantilla')
@section('content')
<!-- Dark table -->
      <div class="row mt-5">
        <div class="col">
          <div class="card bg-default shadow">
            <div class="card-header bg-transparent border-0">
              <h3 class="text-white mb-0">Registros tipo trámites</h3>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-dark table-flush">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Nombre tipo trámite</th>
                    <th scope="col">Ver detalle</th>
                    <th scope="col">Actualizar</th>
                    <th scope="col">Eliminar</th>                  
                  </tr>
                </thead>
                @foreach($tramites as $tramite)
                <tbody>
                  <tr>
                    
                    <th scope="row">
                      <div class="media align-items-center">
                       
                        <div class="media-body">
                          <span class="mb-0 text-sm">{{ $tramite->nombretipotramite }}</span>
                        </div>
                      </div>
                    </th>

                    <td>
                      <button type="button" class="btn btn-success"><a href="{{ route('tipotramite.show', $tramite->id) }}">Ver</a></button>
                    </td>
                    <td>
                     <button type="button" class="btn btn-danger"><a href="{{ route('tipotramite.edit', $tramite->id) }}">Actualizar</a></button>
                    

                    </td>
                    <td>
                      <form action="{{ route('tipotramite.delete', $tramite->id) }}" method="POST">
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
@endsection