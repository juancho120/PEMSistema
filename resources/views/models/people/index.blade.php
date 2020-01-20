@extends('layouts.panel.app')

@section('title', 'Lista')

@section('content')
               <!-- TABLE: LATEST ORDERS -->
               <div class="card">
                <div class="card-header border-transparent">
                  <h3 class="card-title">Listado de PEM</h3>
  
                    <div class="card-tools">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-search"></i></span>
                            </div>
                        </div>
                        <a href="/people/create"><button class="btn btn-success"><b>AGREGAR PEM</b></button></a>
                    </div>

                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table m-0">
                      <thead>
                      <tr>
                        <th>#</th>
                        <th>Apellido y Nombre</th>
                        <th>CUIL</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Decreto</th>
                        <th>Estudios</th>
                        <th></th>
                        <th></th>
                      </tr>
                      </thead>
                      <tbody>
                      @foreach ($people as $person)
                        <tr>
                            <td scope="col">{{$person->id}}</td>
                            <td><a href="#">{{$person->lastname}} {{$person->name}}</a></td>
                            <td>{{$person->cuil}}</td>
                            <td>{{$person->birth}}</td>
                            <td><span class="badge badge-success">DECRETO</span></td>
                            <td>@if($person->study->level == 'Otro') 
                                    {{ $person->study->other }}
                                @else
                                    {{ $person->study->level }}
                                @endif
                            </td>
                            <td></td>
                            <td></td>
                        </tr>
                      @endforeach
                      </tbody>
                    </table>
                  </div>
                  <!-- /.table-responsive -->
                </div>
@endsection
