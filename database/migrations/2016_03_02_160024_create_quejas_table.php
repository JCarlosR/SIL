<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuejasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quejas', function (Blueprint $table) {
            $table->increments('id');

            $table->string('email', 100);
            $table->string('descripcion');

            $table->enum('estado', ['Pendiente', 'Atendida', 'Omitida'])->default('Pendiente');

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
        Schema::drop('quejas');
    }
}
