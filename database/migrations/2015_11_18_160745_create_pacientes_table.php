<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nombre');
            $table->string('dni');
            $table->integer('numhijos');
            $table->string('estudios');
            $table->string('sexo');
            $table->string('gruposangre');

            $table->integer('pacienteperfil_id')->unsigned();
            $table->foreign('pacienteperfil_id')->references('id')->on('pacienteperfiles');

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
        Schema::drop('pacientes');
    }
}
