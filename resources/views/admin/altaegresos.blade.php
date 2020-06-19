@extends('app.plantilla')

@section('content')
<div class="card bg-secondary shadow">
    <h3>Registro Egresos</h3>
    <div class="form-group">

        <br><br><br>
    <form action="{{ route('egresos.store') }}" method="POST" class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
        @csrf


        <div class="col-lg-6">
            <h6 class="heading-small text-muted mb-4">Fecha Egresos: {{ now() }}</h6>
            
            <input type="date" name="fechaegresos" class="form-control"> 
            @if($errors->any())
                <div class="alert-danger mb-4">
                    {{ $errors->first('fechaegresos') }}
                </div>
            @endif
        </div>

         <div class="col-lg-6">
            <h6 class="heading-small text-muted mb-4">Motivo:</h6>
            
            <input type="text" name="motivo" class="form-control">
            @if($errors->any())
                <div class="alert-danger mb-4">
                    {{ $errors->first('motivo') }}
                </div>
            @endif
        </div>

        <div class="col-lg-6">
            <h6 class="heading-small text-muted mb-4">Cantidad:</h6>
            
            <input type="text" name="cantidad" class="form-control" >
            @if($errors->any())
                <div class="alert-danger mb-4">
                    {{ $errors->first('cantidad') }}
                </div>
            @endif
        </div>
    
    


    

    


        

        <div class="col-lg-6">
            <div></div>
        <input type="submit" value="Guardar" class="btn btn-outline-success">
    </div>

    </form>
@endsection