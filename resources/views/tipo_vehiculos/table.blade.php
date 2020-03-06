<div class="table-responsive">
    <table class="table" id="tipoVehiculos-table">
        <thead>
            <tr>
                <th>Tipo Vehiculo</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tipoVehiculos as $tipoVehiculo)
            <tr>
                <td>{{ $tipoVehiculo->tipo_vehiculo }}</td>
                <td>
                    {!! Form::open(['route' => ['tipoVehiculos.destroy', $tipoVehiculo->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tipoVehiculos.show', [$tipoVehiculo->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('tipoVehiculos.edit', [$tipoVehiculo->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
