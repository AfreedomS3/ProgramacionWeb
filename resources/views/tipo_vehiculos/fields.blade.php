<!-- Tipo Vehiculo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_vehiculo', 'Tipo Vehiculo:') !!}
    {!! Form::text('tipo_vehiculo', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('tipoVehiculos.index') }}" class="btn btn-default">Cancel</a>
</div>
