<!-- Valor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valor', 'Valor:') !!}
    {!! Form::text('valor', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha', 'Fecha:') !!}
    {!! Form::text('fecha', null, ['class' => 'form-control']) !!}
</div>

<!-- Hora Entrada Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hora_entrada', 'Hora Entrada:') !!}
    {!! Form::text('hora_entrada', null, ['class' => 'form-control']) !!}
</div>

<!-- Hora Salida Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hora_salida', 'Hora Salida:') !!}
    {!! Form::text('hora_salida', null, ['class' => 'form-control']) !!}
</div>

<!-- Fk Vehiculos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fk_vehiculos', 'Fk Vehiculos:') !!}
    {!! Form::text('fk_vehiculos', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('facturas.index') }}" class="btn btn-default">Cancel</a>
</div>
