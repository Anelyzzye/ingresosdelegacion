@extends('app.plantilla')
@section('content')

<form  method="GET" action="{{route('eventos')}}" >
  
   <div>
    <h4 class="text-white mb-0">Ingresa concepto de búsqueda </h4>
      <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fa fa-search">
                  
                </span>
              </div>
            </label>
  <input type="search" name="publicadoevento" class="form-control">
 <br>
    </div>
  <br><br><input type="submit" value="Visualizar todos los registros" class="btn btn-outline-primary"> 

</form> 


      <div class="row mt-5">
        <div class="col">
          <div class="card bg-default shadow">
            <div class="card-header bg-transparent border-0">
              <h3 class="text-white mb-0">Registros tipo avisos 
              &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</h3>
               <button type="button" class="btn btn-outline-success"><a href="{{ route('eventos.index')}}" target="_blank">Visualizar tus publicaciones</a></button>
             
            </div>
            
                
                       
            </div><br>

            <div class="table-responsive">
              <table class="table align-items-center table-dark table-flush" id="table_id">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Titulo del evento</th>
                    
                   
                    <th scope="col">Actualizar</th>
                    <th scope="col">Eliminar</th>                  
                  </tr>
                </thead>
                @foreach($eventos as $even)
                <tbody>
                  <tr>
                    
                    <th scope="row">
                      <div class="media align-items-center">
                       
                        <div class="media-body">
                          <span class="mb-0 text-sm">{{ $even->evento_titulo}}</span>
                        </div>
                      </div>
                    </th>


                  

                   
                    <td>
                     <button type="button" class="btn btn-outline-warning"><a href="{{ route('eventos.edit', $even->id )}}">Actualizar</a></button>
                    

                    </td>
                    <td>
                      <form action="{{ route('eventos.delete', $even->id)}}" method="POST">
                          @method("DELETE")
                          @csrf
                          <input type="submit" id="btn_eliminar"class="btn btn-outline-danger" value="Eliminar">
          
                     </form>
                    <td>
                     
                </tbody>
                @endforeach
              </table>
              {{ $eventos->render()}}
            </div>
          </div>
        </div>
      </div>

      
@endsection