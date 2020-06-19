@extends('app.plantilla')
@section('content')
<!-- Dark table -->
<form  method="GET" action="{{route('cita.show')}}" >
  
    <h4 class="text-white mb-0">Ingrese fecha: </h4>
      <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fa fa-search">
                  
                </span>
              </div>
            </label>
  <input type="date" name="fecha" class="form-control">
 <br>
    </div>
  <br><br><input type="submit" value="Visualizar citas" class="btn btn-outline-primary"> 

</form> 
      <div class="row mt-4">
        <div class="col">
          <div class="card bg-default shadow">
            <div class="card-header bg-transparent border-0">
              <h3 class="text-white mb-0">Citas</h3>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-dark table-flush">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Nombre cita</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Hora</th>
                    <th scope="col">Trámite</th>

                    <th scope="col">Generar Ingreso</th>
                                      
                  </tr>
                </thead>
                @foreach($cita as $c)
                <tbody>
                  <tr>
                    
                    <th scope="row">
                      <div class="media align-items-center">
                       
                        <div class="media-body">
                          <span class="mb-0 text-sm">{{ $c->nombre }} {{ $c->app }} {{ $c->apm }} </span>
                        </div>
                      </div>
                    </th>
                    <td>
                      {{ $c->dia->toDateString()}}
                    </td>
                    <td>{{ $c->hora}}</td>
                    <td>{{ $c->tramite}}</td>

                    <td>
                       <button type="button" class="btn btn-danger"><a href="{{ route('cita.edit', $c->id) }}">Pago trámite</a></button>
                    

                    </td>
                                        
                </tbody>
                @endforeach
              </table>
            </div>
          </div>
        </div>
      </div>
        
      </script>
@endsection