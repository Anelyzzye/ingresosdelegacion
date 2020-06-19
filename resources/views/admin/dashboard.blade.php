@extends('app.plantilla')

@section('content')




 <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white">Hola</h1>
            <p class="text-white mt-0 mb-5">El sistema de Ingresos y egresos cuenta con un menú en la parte izquierda en los cuales podrás encontrar los formularios de registro, y en la parte superior las tablas con los datos concentrados. </p>
            <a href="{{route('ciudadano.create')}}" class="btn btn-info">Comenzar</a>
          </div>
        </div>
      </div>
    </div>

@endsection    