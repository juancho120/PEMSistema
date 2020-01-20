@extends('admin.show')

@section('title', 'Ver')

@section('content')

@if (session('status'))
    
    <div class="alert alert-success d-flex justify-content-center ">
        {{ session('status') }}
    </div>

@endif

<div class="row">

    <h1 class="col-12">{{$pem->lastName}}, {{$pem->name}} </h1> 

    <div class="col-12 d-flex justify-content-center mx-2">
        <div class="col-3">       
                <p>Apellido: {{$pem->lastName}}</p>
                <p>Nombre: {{$pem->name}}</p>
                <p>CUIL: {{$pem->cuil}}</p>
                <p>Domicilio: {{$pem->address}}</p>
                <p>Email: {{$pem->email}}</p>
                <p>Secretaria de dependencia: {{$pem->secretaria}}</p>
                <p>Responsable a cargo: {{$pem->responsable}}</p>
                <p>Direccion del area: {{$pem->addressArea}}</p>
            </div>    

        <div class="col-3">
                <p>Nº de Decreto: {{$pem->decreto}}</p>
                <p>Antiguedad: {{$pem->antiguedad}}</p>
                <p>Horario de trabajo: {{$pem->horario}}</p>
                <p>Funciones que cumple: {{$pem->funcion}}</p>
                <p>Nivel educativo: {{$pem->educacion}}</p>
                <p>Capacitaciones realizadas: {{$pem->capacitaciones}}</p>
                <p>Otras capacidades: {{$pem->otrasCapacidades}}</p>
                <p>Habilidades de oficio: {{$pem->habilidades}}</p>
        </div>
    </div>

    <div class="col-1 offset-9 ">
        <a href="/pem/{{$pem->slug}}/edit" class="col-12 btn btn-primary">Editar</a>
    </div>
    
    {!! Form::open([ 'route' => ['pem.destroy', $pem->slug], 'method' => 'DELETE', 'class' => 'col-1']) !!}
     {!! Form::submit('Eliminar', ['class' => 'btn btn-danger col-12']) !!}
    {!! Form::close() !!}

</div>

@endsection