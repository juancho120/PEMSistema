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
                        <div class="col-md-8 offset-md-2">
                          <div class="form-group">
                              <label class="">Apellido</label>
                              <input type="text" aria-label="lastname" class="form-control">
                              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                          </div>

                          <div class="form-group">
                            <label class="">Nombre</label>
                            <input type="text" aria-label="name" class="form-control">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                          </div>
                          
                          <div class="form-group">
                            <label class="">CUIL</label>
                            <input type="text" aria-label="cuil" class="form-control">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                          </div>

                          <div class="form-group">
                            <label>Fecha de Nacimiento</label>
                            <input type="date" aria-label="birth" class="form-control">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                          </div>

                          <div class="form-group">
                            <label class="">Barrio</label>
                            <input type="text" aria-label="neighborhood" class="form-control">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                          </div>

                          <div class="form-group">
                            <label class="">Calle</label>
                            <input type="text" aria-label="street" class="form-control">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                          </div>

                          <div class="form-group">
                            <label class="">Numero</label>
                            <input type="text" aria-label="number" class="form-control">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                          </div>

                          <div class="form-group">
                            <label class="">Departamento</label>
                            <input type="text" aria-label="aparment" class="form-control">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                          </div>

                          <div class="form-group">
                            <label>Formacion Alcanzada</label>
                            <select class="form-control select2" style="width: 100%;">
                              <option>Estudios 1</option>
                            </select>
                          </div>

                          <div class="form-group">
                            <label class="">Cursos Realizados</label>
                            <input type="text" aria-label="name" class="form-control">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                          </div>

                          <div class="form-group">
                            <label class="">Institucion del Curso</label>
                            <input type="text" aria-label="academy" class="form-control">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                          </div>

                          <div class="form-group">
                            <label>Fecha de Certifiacion</label>
                            <input type="date" aria-label="year" class="form-control">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                          </div>

                        </div>
                      </div>
                    </div>                
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