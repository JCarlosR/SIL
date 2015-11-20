<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTriajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('triajes', function (Blueprint $table) {
            $table->increments('id');

            $table->decimal('peso', 6, 3);
            $table->decimal('talla', 3, 2);
            $table->string('presion_arterial');
            $table->string('frecuencia_cardiaca');

            $table->integer('paciente_id')->unsigned();
            $table->foreign('paciente_id')->references('id')->on('pacientes');
            $table->integer('hojaruta_id')->unsigned();
            $table->foreign('hojaruta_id')->references('id')->on('hoja_rutas');
            $table->integer('protocolo_id')->unsigned();
            $table->foreign('protocolo_id')->references('id')->on('protocolos');
            $table->integer('orden_id')->unsigned();
            $table->foreign('orden_id')->references('id')->on('ordenes');
            $table->integer('historial_clinico_id')->unsigned();
            $table->foreign('historial_clinico_id')->references('id')->on('historial_clinicos');
//            $table->integer('user_id')->unsigned();
//            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::drop('triajes');
    }
}
