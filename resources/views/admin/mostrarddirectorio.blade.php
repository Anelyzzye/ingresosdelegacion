@extends('app.plantilla')
@section('content')
<!-- Dark table -->
<form  method="GET" action="#" >
  
    <h4 class="text-white mb-0">Ingrese el area </h4>
      <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fa fa-search">
                  
                </span>
              </div>
            </label>
  <input type="text" name="text" class="form-control">
 <br>
    </div>
  <br><br><input type="submit" value="Visualizar citas" class="btn btn-outline-primary"> 

</form> 
      <div class="row mt-4">
        <div class="col">
          <div class="card bg-default shadow">
            <div class="card-header bg-transparent border-0">
              <h3 class="text-white mb-0">Directorio Prueba</h3>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-dark table-flush">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Nombre rueba</th>
                    <th scope="col">Telefono Prueba</th>
                    <th scope="col">Prueba</th>
                    <th scope="col">Prueba</th>

                    <th scope="col">Prueba</th>
                                      
                  </tr>
                </thead>
              
                <tbody>
                  <tr>
                    
                    <th scope="row">
                      <div class="media align-items-center">
                       
                        <div class="media-body">
                          <span class="mb-0 text-sm"> </span>
                        </div>
                      </div>
                    </th>
                    <td>
                    
                    </td>
                    <td></td>
                    <td></td>

                    <td>
                       <button type="button" class="btn btn-danger"><a href="#"></a></button>
                    

                    </td>
                                        
                </tbody>
               
              </table>
            </div>
          </div>
        </div>
      </div>
        
      </script>
@endsection