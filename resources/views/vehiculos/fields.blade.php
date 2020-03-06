<!-- Placa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('placa', 'Placa:') !!}
    {!! Form::text('placa', null, ['class' => 'form-control']) !!}
</div>

<!-- Color Field -->
<div class="form-group col-sm-6">
    {!! Form::label('color', 'Color:') !!}
    {!! Form::text('color', null, ['class' => 'form-control']) !!}
</div>

<!-- Modelo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('modelo', 'Modelo:') !!}
    {!! Form::text('modelo', null, ['class' => 'form-control']) !!}
</div>

<!-- Numero Motor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero_motor', 'Numero Motor:') !!}
    {!! Form::text('numero_motor', null, ['class' => 'form-control']) !!}
</div>

<!-- Fk Tipo Vehiculo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fk_tipo_vehiculo', 'Fk Tipo Vehiculo:') !!}
    {!! Form::text('fk_tipo_vehiculo', null, ['class' => 'form-control']) !!}
</div>

<!-- Fk Cliente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fk_cliente', 'Fk Cliente:') !!}
    {!! Form::text('fk_cliente', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('vehiculos.index') }}" class="btn btn-default">Cancel</a>
</div>
