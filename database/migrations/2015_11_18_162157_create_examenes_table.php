<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examenes', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nombre');

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
        Schema::drop('examenes');
    }
}
