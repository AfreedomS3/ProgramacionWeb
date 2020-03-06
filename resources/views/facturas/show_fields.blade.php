<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $facturas->id }}</p>
</div>

<!-- Valor Field -->
<div class="form-group">
    {!! Form::label('valor', 'Valor:') !!}
    <p>{{ $facturas->valor }}</p>
</div>

<!-- Fecha Field -->
<div class="form-group">
    {!! Form::label('fecha', 'Fecha:') !!}
    <p>{{ $facturas->fecha }}</p>
</div>

<!-- Hora Entrada Field -->
<div class="form-group">
    {!! Form::label('hora_entrada', 'Hora Entrada:') !!}
    <p>{{ $facturas->hora_entrada }}</p>
</div>

<!-- Hora Salida Field -->
<div class="form-group">
    {!! Form::label('hora_salida', 'Hora Salida:') !!}
    <p>{{ $facturas->hora_salida }}</p>
</div>

<!-- Fk Vehiculos Field -->
<div class="form-group">
    {!! Form::label('fk_vehiculos', 'Fk Vehiculos:') !!}
    <p>{{ $facturas->fk_vehiculos }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $facturas->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $facturas->updated_at }}</p>
</div>

