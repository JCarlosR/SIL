<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacienteexamenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacienteexamenes', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('orden_id')->unsigned();
            $table->foreign('orden_id')->references('id')->on('ordenes');

            $table->integer('examen_id')->unsigned();
            $table->foreign('examen_id')->references('id')->on('examenes');

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
        Schema::drop('pacienteexamenes');
    }
}
