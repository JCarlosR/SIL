<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestinteligenciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testinteligencia', function (Blueprint $table) {
            $table->increments('id');


            $table->string('espacial');
            $table->string('intrapersonal');
            $table->string('interpersonal');
            $table->string('verbal');
            $table->string('logico_matematico');
            $table->string('kinesetica');



            $table->integer('historialClinico_id')->unsigned();
            $table->integer('hojaruta_id')->unsigned();
            $table->integer('protocolo_id')->unsigned();
            $table->integer('detalleorden_id')->unsigned();
            $table->integer('id_test')->unsigned();

            $table->foreign('id_test')->references('id')->on('psicologia');
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
        Schema::drop('testinteligencia');
    }
}
