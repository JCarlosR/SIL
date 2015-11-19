<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHojarutasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoja_rutas', function (Blueprint $table) {
            $table->increments('id');

            $table->date('fecha_creacion');

            $table->integer('protocolo_id')->unsigned();
            $table->foreign('protocolo_id')->references('id')->on('protocolos');
            $table->integer('orden_id')->unsigned();
            $table->foreign('orden_id')->references('id')->on('ordenes');
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
        Schema::drop('hoja_rutas');
    }
}
