@extends('app.plantilla')
@section('content')
<!-- Dark table -->
     <div class="card bg-secondary shadow">
  <h3>Registro Usuario</h3>
  <div class="form-group">

    <br><br><br>

              <form method="POST"  action="{{ route('tipociudadano.store') }}" class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
                  @csrf
                  <div class="col-lg-6">
                    <h6 class="heading-small text-muted mb-4"></h6>
                    <input type="hidden" name="" value="{{ $citareal->id }}">
                  </div> 

                  <div class="col-lg-6">
                    <h6 class="heading-small text-muted mb-4">Nombres</h6>
                    <input type="text" name="" value="{{ $citareal->nombres }}" class="form-control" disabled />
                  </div> 

                  <div class="col-lg-6">
                    <h6 class="heading-small text-muted mb-4">Apellido Paterno</h6>
                    <input type="text" name="" value="{{ $citareal->apellidopat }}" class="form-control" disabled />
                  </div> 

                  <div class="col-lg-6">
                    <h6 class="heading-small text-muted mb-4">Apellido Paterno</h6>
                    <input type="text" name="" value="{{ $citareal->apellidomat }}" class="form-control" disabled />
                  </div> 

                  <div class="col-lg-6">
                    <h6 class="heading-small text-muted mb-4"></h6>
                    <input type="text" name=""  class="form-control">
                    
                  </div> 


                  <div class="col-lg-6">
                    <input type="submit" value="Enviar" class="btn btn-outline-default">
                  </div>
  </form>
              


            </div>
          </div>
        </div>
      </div>
@endsection