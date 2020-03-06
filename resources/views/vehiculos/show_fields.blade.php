<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $vehiculos->id }}</p>
</div>

<!-- Placa Field -->
<div class="form-group">
    {!! Form::label('placa', 'Placa:') !!}
    <p>{{ $vehiculos->placa }}</p>
</div>

<!-- Color Field -->
<div class="form-group">
    {!! Form::label('color', 'Color:') !!}
    <p>{{ $vehiculos->color }}</p>
</div>

<!-- Modelo Field -->
<div class="form-group">
    {!! Form::label('modelo', 'Modelo:') !!}
    <p>{{ $vehiculos->modelo }}</p>
</div>

<!-- Numero Motor Field -->
<div class="form-group">
    {!! Form::label('numero_motor', 'Numero Motor:') !!}
    <p>{{ $vehiculos->numero_motor }}</p>
</div>

<!-- Fk Tipo Vehiculo Field -->
<div class="form-group">
    {!! Form::label('fk_tipo_vehiculo', 'Fk Tipo Vehiculo:') !!}
    <p>{{ $vehiculos->fk_tipo_vehiculo }}</p>
</div>

<!-- Fk Cliente Field -->
<div class="form-group">
    {!! Form::label('fk_cliente', 'Fk Cliente:') !!}
    <p>{{ $vehiculos->fk_cliente }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $vehiculos->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $vehiculos->updated_at }}</p>
</div>

