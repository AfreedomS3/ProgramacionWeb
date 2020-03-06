@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tipo Vehiculo
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tipoVehiculo, ['route' => ['tipoVehiculos.update', $tipoVehiculo->id], 'method' => 'patch']) !!}

                        @include('tipo_vehiculos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection