<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultadoRadiologiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ResultadoRadiologia', function (Blueprint $table) {
            $table->increments('id');

            $table->string('tipoRadiologia');
            $table->date('fechaRegistro');
            $table->string('resultadoDescriptivo');
            $table->string('codFolder');
            $table->string('nombreImagen');
            

            $table->integer('historialClinico_id')->unsigned();
            $table->integer('hojaruta_id')->unsigned();
            $table->integer('protocolo_id')->unsigned();
            $table->integer('detalleorden_id')->unsigned();


            $table->foreign('historialClinico_id')->references('id')->on('historial_clinicos');
            $table->foreign('hojaruta_id')->references('id')->on('hoja_rutas');
            $table->foreign('protocolo_id')->references('id')->on('protocolos');
            $table->foreign('detalleorden_id')->references('id')->on('ordenes');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ResultadoRadiologia');
    }
}
