@extends('app.plantilla')
@section('content')
<!-- Dark table -->
<?php $cadena= '';

 ?>
 @foreach ($donacion as $d)
<?php 
$cadena=$cadena.$d->concepto.'~';
$cadena=$cadena.$d->porcentaje;
$cadena=$cadena.'¬';
 ?>
 @endforeach
<form  method="GET" action="{{route('donacion')}}" >
  
   <div>
    <label>Ingresa concepto de búsqueda 
      <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fa fa-search">
                  
                </span>
              </div>
            </label>
  <input type="search" name="concepto" class="g-control form-control-alternative">
 <br>
    </div>
  <br><input type="submit" value="Visualizar todos los registros" class="btn btn-outline-primary"> 

</form>

      <div class="row mt-5">
        <div class="col">
          <div class="card bg-default shadow">
            <div class="card-header bg-transparent border-0">
              <h3 class="text-white mb-0">Registros tipo donaciones 
              &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</h3>
             
            </div>
            <div>
              <a href="{{ route('formato.pdf', ['concepto' => $concepto]) }}">Descargar en PDF</a><br>
            </div><br>
            <div>
              <form action="{{ route('hoja.excel') }}" method="GET">
                <input type="hidden" name="criterio" value="<?php echo $cadena; ?>">
                <input type="submit" value="Descargar en Excel">
                
              </form>
              
            </div><br>

            <div class="table-responsive">
              <table class="table align-items-center table-dark table-flush" id="table_id">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Concepto</th>
                    <th scope="col">Porcentaje</th>
                    <th scope="col">Verificar Asistencia</th>
                    <th scope="col">Actualizar</th>
                    <th scope="col">Eliminar</th>                  
                  </tr>
                </thead>
                @foreach($donacion as $donado)
                <tbody>
                  <tr>
                    
                    <th scope="row">
                      <div class="media align-items-center">
                       
                        <div class="media-body">
                          <span class="mb-0 text-sm">{{ $donado->concepto }}</span>
                        </div>
                      </div>
                    </th>


                    <td>
                      {{ $donado->porcentaje }}
                    </td>

                    <td>
                      <button type="button" class="btn btn-success"><a href="{{ route('donacion.show', $donado->id ) }}">Ver</a></button>
                    </td>
                    <td>
                     <button type="button" class="btn btn-danger"><a href="{{ route('donacion.edit', $donado->id) }}">Actualizar</a></button>
                    

                    </td>
                    <td>
                      <form action="{{ route('donacion.delete', $donado->id) }}" method="POST">
                          @method("DELETE")
                          @csrf
                          <input type="submit" id="btn_eliminar"class="btn btn-warning" value="Eliminar">
          
                     </form>
                    <td>
                     
                </tbody>
                @endforeach
              </table>
              {{ $donacion->render()}}
            </div>
          </div>
        </div>
      </div>
      <script>
        let eliminar = document.getElementById("btn_eliminar")
          eliminar.addEventListener("click", () => {
            let afirma = confirm("¿Desea eliminar este registro?")
              if(afirma) {
                fetch("{{ route('donacion.delete', $donado->id) }}")
                  alert("Registro eliminado");
                }else{
                  
                }
              })
        
      </script>
@endsection