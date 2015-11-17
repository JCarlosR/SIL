<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCargosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cargos', function (Blueprint $table) {
            $table->increments('id');

            // Cargo que pertenece al MOF siguiente
            $table->integer('MOF_id')->unsigned();
            $table->foreign('MOF_id')->references('id')->on('MOF');

            // Datos de un cargo
            $table->string('unidad');
            $table->string('nombre');
            $table->string('funcion');

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
        Schema::drop('cargos');
    }
}
