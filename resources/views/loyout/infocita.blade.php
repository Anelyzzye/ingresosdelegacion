@extends('layouts.app')

@section('content')
 <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-secondary">
                
  <div class="card-header">


              <form>
              
                <h6 class="heading-small text-muted mb-4">Información de su cita</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                      
                        <label class="form-control-label" for="input-username">Nombre del solicitante: </label>
                        <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Username" value="{{ $cita->nombre }} {{ $cita->app }} {{ $cita->apm }}" disabled>
                        
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Fecha de la cita:</label>
                        <input type="email" id="input-email" class="form-control form-control-alternative" value="{{ $cita->dia->toDateString()}}" disabled>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Asistir a las:</label>
                        <input type="text" id="input-first-name" class="form-control form-control-alternative" value="{{ $cita->hora}}"  disabled>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Su trámite corresponde:</label>
                        <input type="text" id="input-last-name" class="form-control form-control-alternative" value="{{ $cita->tramite}}"  disabled>
                      </div>
                    </div>
                  </div>
                </div>
            

                <hr class="my-4" />
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Agradecemos tu preferencia</h6>
                
               

      @endsection