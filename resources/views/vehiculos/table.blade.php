<div class="table-responsive">
    <table class="table" id="vehiculos-table">
        <thead>
            <tr>
                <th>Placa</th>
        <th>Color</th>
        <th>Modelo</th>
        <th>Numero Motor</th>
        <th>Fk Tipo Vehiculo</th>
        <th>Fk Cliente</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($vehiculos as $vehiculos)
            <tr>
                <td>{{ $vehiculos->placa }}</td>
            <td>{{ $vehiculos->color }}</td>
            <td>{{ $vehiculos->modelo }}</td>
            <td>{{ $vehiculos->numero_motor }}</td>
            <td>{{ $vehiculos->fk_tipo_vehiculo }}</td>
            <td>{{ $vehiculos->fk_cliente }}</td>
                <td>
                    {!! Form::open(['route' => ['vehiculos.destroy', $vehiculos->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('vehiculos.show', [$vehiculos->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('vehiculos.edit', [$vehiculos->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
