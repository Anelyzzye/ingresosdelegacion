@extends('app/presencia')
@section('content')

<!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8">
   
    </div>

    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <!-- Table -->
      <br><br><div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
          <div class="card bg-secondary shadow border-0">
            <div class="card-header bg-transparent pb-5">
              <div class="text-muted text-center mt-2 mb-4"><small><div class="card-header">{{ __('Inicio de sesión') }}</div></small></
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <small>*Ingrese sus claves de acceso</small>
              </div>
              <form role="form" action="{{ route('login')}}" method="POST">
              	@csrf
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                   
                </div>
                <div class="form-group">
                  <div class="input-group input-groupmb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    <br><br>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                  </div>
                </div>
                <div class="text-muted font-italic">

                    </div>
                  </div>
                </div>
                <div class="text-center">

                  <button type="submit" class="btn btn-primary mt-4">Ingresar</button>
                </div>
              </form>
              <div>
                                    <a class="btn btn-link" href="{{ route('recuperar') }}">
                                        {{ __('¿Olvidaste tú contraseña?') }}
                                    </a>
                                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 

@endsection