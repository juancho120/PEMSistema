@extends('admin.index')

@section('title', 'Listado')

@section('content')

@if (session('status'))
    
    <div class="alert alert-danger d-flex justify-content-center ">
        {{ session('status') }}
    </div>

@endif

        <table class="table table-striped table-bordered table-hover table-condensed ">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">cuil</th>
                    <th scope="col">Email</th>
                    <th scope="col">Secretaria</th>
                    <th scope="col">Responsable</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
        @foreach ($pems as $pem)
                 <tr>
                    <th scope="row">{{$pem->id}}</td>
                    <td>{{$pem->lastName}}</td>
                    <td>{{$pem->name}}</td>
                    <td>{{$pem->cuil}}</td>
                    <td>{{$pem->email}}</td>
                    <td>{{$pem->secretaria}}</td>
                    <td>{{$pem->responsable}}</td>
                    <td><a href="pem/{{$pem->slug}}" class="btn text-white" style="background-color: #0076B1">VER</a></td>
                 </tr>
        @endforeach
            </tbody>
        </table>

@endsection