<div class="table-responsive">
    <table class="table" id="facturas-table">
        <thead>
            <tr>
                <th>Valor</th>
        <th>Fecha</th>
        <th>Hora Entrada</th>
        <th>Hora Salida</th>
        <th>Fk Vehiculos</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($facturas as $facturas)
            <tr>
                <td>{{ $facturas->valor }}</td>
            <td>{{ $facturas->fecha }}</td>
            <td>{{ $facturas->hora_entrada }}</td>
            <td>{{ $facturas->hora_salida }}</td>
            <td>{{ $facturas->fk_vehiculos }}</td>
                <td>
                    {!! Form::open(['route' => ['facturas.destroy', $facturas->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('facturas.show', [$facturas->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('facturas.edit', [$facturas->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
