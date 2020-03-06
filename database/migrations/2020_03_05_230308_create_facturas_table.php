<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFacturasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->increments('id');
            $table->text('valor');
            $table->date('fecha');
            $table->dateTime('hora_entrada');
            $table->dateTime('hora_salida');
            $table->integer('fk_vehiculos')->unsigned();
            $table->timestamps();
            $table->foreign('fk_vehiculos')->references('id')->on('vehiculos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('facturas');
    }
}
