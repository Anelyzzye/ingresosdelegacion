
@extends('app/presencia')
@section('content')

<div class="container mt--8 pb-5">
      <!-- Table -->
      <div class="row justify-content-center">
        <br><br>
        <div class="col-lg-6 col-md-8">
          <div class="card bg-secondary shadow border-0">
            <div class="card-header bg-transparent pb-5">
              <div class="text-muted text-center mt-2 mb-4">
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <small>*Ingrese su correo electronico</small>
              </div>
              <form role="form" action="{{ route('email')}}" method="POST">
                @csrf
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                   
                </div>
                <div class="form-group">
                  <div class="input-group input-groupmb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Email" name="email" type="email">
                  </div>
                </div>

               
                <div class="text-muted font-italic">

                    </div>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary mt-4">Enviar</button>
                </div>
              </form>
              <div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @endsection