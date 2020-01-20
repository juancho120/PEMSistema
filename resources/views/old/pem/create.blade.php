@extends('admin.create')

@section('title', 'Listado')

@section('content')

@include('common.error')

    {!! Form::open(['route' => 'pem.store', 'method' => 'POST', 'class' => 'form-group row d-flex justify-content-center mx-2']) !!}
        
        @include('pem.form')

        {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
        
    {!! Form::close() !!}

 {{--    <form class="form-group row d-flex justify-content-center mx-2" method="POST" action="/pem">
            @csrf

        <div class="col-6">
            <div class="from-group">
                <label for="" class="">Apellido:</label>
                <input type="text" name="lastName" class= "form-control">
            </div>

            <div class="from-group">
                <label for="">Nombre:</label>
                <input type="text" name="name" class= "form-control">
            </div>

            <div class="from-group">
                <label for="">CUIL:</label>
                <input type="text" name="cuil" class= "form-control">
            </div>

            <div class="from-group">
                <label for="">Domicilio:</label>
                <input type="text" name="address" class= "form-control">
            </div> 

            <div class="from-group">
                <label for="">Email:</label>
                <input type="text" name="email" class= "form-control email">
            </div> 

            <div class="from-group">
                <label for="">Area de dependencia:</label>
                <input type="text" name="area" class= "form-control">
            </div> 

            <div class="from-group">
                <label for="">Responsable a cargo:</label>
                <input type="text" name="responsable" class= "form-control">
            </div> 

            <div class="from-group">
                <label for="">Direccion del area:</label>
                <input type="text" name="addressArea" class= "form-control">
            </div> 
        </div>    

        <div class="col-6">
            <div class="from-group">
                <label for="">Nº de Decreto:</label>
                <input type="text" name="decreto" class= "form-control">
            </div> 

            <div class="from-group">
                <label for="">Antiguedad:</label>
                <input type="text" name="antiguedad" class= "form-control">
            </div> 

            <div class="from-group">
                <label for="">Horario de trabajo:</label>
                <input type="text" name="horario" class= "form-control">
            </div> 

            <div class="from-group">
                <label for="">Funciones que cumple:</label>
                <input type="text" name="funcion" class= "form-control">
            </div> 

            <div class="from-group">
                <label for="">Nivel educativo:</label>
                <input type="text" name="educacion" class= "form-control">
            </div> 

            <div class="from-group">
                <label for="">Capacitaciones realizadas:</label>
                <input type="text" name="capacitaciones" class= "form-control">
            </div> 

            <div class="from-group">
                <label for="">Otras capacidades:</label>
                <input type="text" name="otrasCapacidades" class= "form-control">
            </div> 

            <div class="from-group">
                <label for="">Habilidades de oficio:</label>
                <input type="text" name="habilidades" class= "form-control">
            </div> 
        </div>

        <div class="form-group my-3 col-12 d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">Enviar</button> 
        </div>

    </form> --}}

@endsection
