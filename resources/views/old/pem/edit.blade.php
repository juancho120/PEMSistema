@extends('admin.edit')

@section('title', 'Editar')

@section('content')

    {!! Form::model($pem, ['route' => ['pem.update', $pem], 'method' => 'PUT', 'class' => 'form-group row d-flex justify-content-center mx-2']) !!}
        @include('pem.form')

        {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

{{-- <form class="form-group row d-flex justify-content-center mx-2" method="POST" action="/pem/{{$pem->slug}}">
    @method('PUT')
    @csrf

    <div class="col-6">
        <div class="from-group">
            <label for="" class="">Apellido:</label>
            <input type="text" name="lastName" class= "form-control" value="{{$pem->lastName}}">
        </div>

        <div class="from-group">
            <label for="">Nombre:</label>
            <input type="text" name="name" class= "form-control" value="{{$pem->name}}">
        </div>

        <div class="from-group">
            <label for="">CUIL:</label>
            <input type="text" name="cuil" class= "form-control" value="{{$pem->cuil}}">
        </div>

        <div class="from-group">
            <label for="">Domicilio:</label>
            <input type="text" name="address" class= "form-control" value="{{$pem->address}}">
        </div> 

        <div class="from-group">
            <label for="">Email:</label>
            <input type="text" name="email" class= "form-control email" value="{{$pem->email}}">
        </div> 

        <div class="from-group">
            <label for="">Area de dependencia:</label>
            <input type="text" name="area" class= "form-control" value="{{$pem->area}}">
        </div> 

        <div class="from-group">
            <label for="">Responsable a cargo:</label>
            <input type="text" name="responsable" class= "form-control" value="{{$pem->responsable}}">
        </div> 

        <div class="from-group">
            <label for="">Direccion del area:</label>
            <input type="text" name="addressArea" class= "form-control" value="{{$pem->addressArea}}">
        </div> 
    </div>    

    <div class="col-6">
        <div class="from-group">
            <label for="">Nº de Decreto:</label>
            <input type="text" name="decreto" class= "form-control" value="{{$pem->decreto}}">
        </div> 

        <div class="from-group">
            <label for="">Antiguedad:</label>
            <input type="text" name="antiguedad" class= "form-control" value="{{$pem->antiguedad}}">
        </div> 

        <div class="from-group">
            <label for="">Horario de trabajo:</label>
            <input type="text" name="horario" class= "form-control" value="{{$pem->horario}}">
        </div> 

        <div class="from-group">
            <label for="">Funciones que cumple:</label>
            <input type="text" name="funcion" class= "form-control" value="{{$pem->funcion}}">
        </div> 

        <div class="from-group">
            <label for="">Nivel educativo:</label>
            <input type="text" name="educacion" class= "form-control" value="{{$pem->educacion}}">
        </div> 

        <div class="from-group">
            <label for="">Capacitaciones realizadas:</label>
            <input type="text" name="capacitaciones" class= "form-control" value="{{$pem->capacitaciones}}">
        </div> 

        <div class="from-group">
            <label for="">Otras capacidades:</label>
            <input type="text" name="otrasCapacidades" class= "form-control" value="{{$pem->otrasCapacidades}}">
        </div> 

        <div class="from-group">
            <label for="">Habilidades de oficio:</label>
            <input type="text" name="habilidades" class= "form-control" value="{{$pem->habilidades}}">
        </div> 
    </div>

    <div class="form-group my-3 col-12 d-flex justify-content-center">
        <button type="submit" class="btn btn-primary">Actualizar</button> 
    </div>
</form> --}}

@endsection