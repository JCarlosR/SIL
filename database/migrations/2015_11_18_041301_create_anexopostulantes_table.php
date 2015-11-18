<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnexopostulantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anexopostulantes', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('postulante_id')->unsigned();
            $table->foreign('postulante_id')->references('id')->on('postulantes');
            $table->string('anexo');

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
        Schema::drop('anexopostulantes');
    }
}
