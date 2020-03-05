@extends('layouts.panel.app')

@section('title', 'Agregar')

@section('content')
               <!-- TABLE: LATEST ORDERS -->
               <div class="card">
                <div class="card-header border-transparent">
                  <h3 class="card-title">Agregar PEM</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-default">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-5 offset-md-1">
                          <div class="form-group">
                              <label class="">Apellido</label>
                              <input type="text" aria-label="lastname" class="form-control">
                              <small class="form-text text-muted">Coloca el apellido del beneficiario.</small>
                          </div>

                          <div class="form-group">
                            <label class="">Nombre</label>
                            <input type="text" aria-label="name" class="form-control">
                            <small class="form-text text-muted">Coloca el nombre del beneficiario.</small>
                          </div>
                          
                          <div class="form-group">
                            <label class="">CUIL</label>
                            <input type="text" aria-label="cuil" class="form-control">
                            <small class="form-text text-muted">Coloca el CUIL del beneficiario.</small>
                          </div>

                          <div class="form-group">
                            <label>Fecha de Nacimiento</label>
                            <input type="date" aria-label="birth" class="form-control">
                            <small class="form-text text-muted">Coloca la fecha de nacimiento del beneficiario.</small>
                          </div>
                          
                          <div class="form-group">
                            <label>Formacion Alcanzada</label>
                            <select class="form-control select2" style="width: 100%;">
                              <option>Estudios 1</option>
                            </select>
                            <small class="form-text text-muted">Selecciona el nivel de estudios.</small>
                          </div>

                          <div class="form-group">
                            <label class="">Cursos Realizados</label>
                            <input type="text" aria-label="name" class="form-control">
                            <small class="form-text text-muted">Coloca los cursos realizados fuera o dentro de la municipalidad.</small>
                          </div>

                          <div class="form-group">
                            <label class="">Institucion del Curso</label>
                            <input type="text" aria-label="academy" class="form-control">
                            <small class="form-text text-muted">Institucion donde se realizaron los cursos.</small>
                          </div>

                          <div class="form-group">
                            <label>Fecha de Certifiacion</label>
                            <input type="date" aria-label="year" class="form-control">
                            <small class="form-text text-muted">Fecha de emision de la certificacion del curso.</small>
                          </div>

                        </div>
                        <div class="col-md-5 offset-md-1">
                          
                          {{-- <div class="form-group row">
                            <select name="secretary_id" id="">
                                <option value="">Elegí categoría</option>
                                @foreach($secretary as $secretary)
                                <option value="{{ $secretary->id }}">{{ $secretary->name }}</option>
                                @endforeach
                            </select>
                          </div> --}}

                          <div class="form-group">
                            <label class="">Numero de Decreto</label>
                            <input type="text" aria-label="academy" class="form-control">
                            <small class="form-text text-muted">Ingresar numero de decreto.</small>
                          </div>

                          <div class="form-group">
                            <label>Fecha de Alta</label>
                            <input type="date" aria-label="year" class="form-control">
                            <small class="form-text text-muted">Fecha de alta del decreto.</small>
                          </div>

                          <div class="form-group">
                            <label>Secretaria</label>
                            <select class="form-control select2" style="width: 100%;">
                              <option>Seleccione una opcion</option>
                              <option>Intendencia Municipal</option>
                              <option>Secretaria de General</option>
                              <option>Secretaria de Hacienda</option>
                              <option>Secretaria de Gobierno</option>
                              <option>Secretaria de Servicios Publicos</option>
                              <option>Secretaria de Obras Publicas</option>
                              <option>Secretaria de Ambiente</option>
                            </select>
                            <small class="form-text text-muted">Secretaria a la que pertenece.</small>
                          </div>

                          <div class="form-group">
                            <label>Area</label>
                            <select class="form-control select2" style="width: 100%;">
                              <option>Seleccione una opcion</option>
                              <option>Jefatura Zona Oeste</option>
                              <option>Jefatura Zona Este</option>
                              <option>Jefatura Zona Norte</option>
                              <option>Gerencia de Deportes Municipal</option>
                              <option>Gerencia de Comunicacion Publica</option>
                              <option>Otros</option>
                            </select>
                            <small class="form-text text-muted">Direccion, coordinacion o gerencia a la que pertenece.</small>
                          </div>

                          <div class="form-group">
                            <label class="">Barrio</label>
                            <input type="text" aria-label="neighborhood" class="form-control">
                            <small class="form-text text-muted">Barrio al que pertenece el lugar de trabajo.</small>
                          </div>

                          <div class="form-group">
                            <label class="">Calle</label>
                            <input type="text" aria-label="street" class="form-control">
                            <small class="form-text text-muted">Calle donde esta situado el lugar de trabajo.</small>
                          </div>

                          <div class="form-group">
                            <label class="">Numero</label>
                            <input type="text" aria-label="number" class="form-control">
                            <small class="form-text text-muted">Altura o numero del lugar de trabajo.</small>
                          </div>

                      </div>  {{-- Close Row --}}  
                      <div class="form-group my-3 col-12 d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Enviar</button> 
                      </div>          
                    </div>  {{-- Close Card --}} 
                </div>
                <!-- /.card-body -->
              </div>
@endsection

@section('scripts')
  <script>
      //Date range picker
      $('#reservation').daterangepicker()
  </script>
@endsection