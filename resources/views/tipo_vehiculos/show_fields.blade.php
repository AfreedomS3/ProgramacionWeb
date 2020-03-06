<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $tipoVehiculo->id }}</p>
</div>

<!-- Tipo Vehiculo Field -->
<div class="form-group">
    {!! Form::label('tipo_vehiculo', 'Tipo Vehiculo:') !!}
    <p>{{ $tipoVehiculo->tipo_vehiculo }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $tipoVehiculo->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $tipoVehiculo->updated_at }}</p>
</div>

