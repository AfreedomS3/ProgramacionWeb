<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVehiculosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->increments('id');
            $table->text('placa');
            $table->text('color');
            $table->text('modelo');
            $table->text('numero_motor');
            $table->integer('fk_tipo_vehiculo')->unsigned();
            $table->integer('fk_cliente')->unsigned();
            $table->timestamps();
            $table->foreign('fk_tipo_vehiculo')->references('id')->on('tipo_vehiculo');
            $table->foreign('fk_cliente')->references('id')->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('vehiculos');
    }
}
