
<div class="col-6">
    <div class="form-group">
        {!! Form::label('lastName', 'Apellido') !!}
        {!! Form::text('lastName', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('cuil', 'CUIL') !!}
        {!! Form::text('cuil', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('address', 'Domicilio') !!}
        {!! Form::text('address', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Email') !!}
        {!! Form::text('email', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('secretaria', 'Secretaria de dependencia') !!}
        {!! Form::select('secretaria', [
            'Secretaria General' => 'Secretaria General', 
            'Secretaria de Gobierno' => 'Secretaria de Gobierno',
            'Secretaria Legal y Tecnica' => 'Secretaria Legal y Tecnica',
            'Secretaria de Servicios Publicos' => 'Secretaria de Servicios Publicos',
            'Secretaria de Desarrollo Urbano' => 'Secretaria de Desarrollo Urbano',
            'Secretaria de Hacienda' => 'Secretaria de Hacienda',], null, ['class' => 'form-control']); !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('responsable', 'Responsable a cargo') !!}
        {!! Form::text('responsable', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('addressArea', 'Direccion del area') !!}
        {!! Form::text('addressArea', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="col-6">
    <div class="form-group">
        {!! Form::label('decreto', 'Nº de Decreto') !!}
        {!! Form::text('decreto', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('antiguedad', 'Antiguedad') !!}
        {!! Form::text('antiguedad', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('horario', 'Horario de trabajo') !!}
        {!! Form::text('horario', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('funcion', 'Funciones que cumple') !!}
        {!! Form::text('funcion', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('educacion', 'Nivel educativo') !!}
        {!! Form::text('educacion', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('capacitaciones', 'Capacitaciones realizadas') !!}
        {!! Form::text('capacitaciones', null, ['class' => 'form-control']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('otrasCapacitaciones', 'Otras capacitaciones') !!}
        {!! Form::text('otrasCapacitaciones', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('habilidades', 'Habilidades de oficio') !!}
        {!! Form::text('habilidades', null, ['class' => 'form-control']) !!}
    </div>
</div>

{{-- <div class="col-4 text-center">
    <div class="form-group">
        {!! Form::label('dni', 'Presento DNI') !!}
        {!! Form::checkbox('dni', 'value'); !!}
    </div>
</div>

<div class="col-4 text-center">
    <div class="form-group">
        {!! Form::label('decreto', 'Presento Decreto') !!}
        {!! Form::checkbox('decreto', 'value'); !!}
    </div>
</div>

<div class="col-4 text-center">
    <div class="form-group">
        {!! Form::label('negativa', 'Presento Negativa') !!}
        {!! Form::checkbox('negativa', 'value'); !!}
    </div>
</div> --}}