<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->increments('id');

            // Esta aptitud pertenece al perfil siguiente
            $table->integer('worker_profile_id')->unsigned();
            $table->foreign('worker_profile_id')->references('id')->on('worker_profiles');

            // Un skill puede representar un valor, habilidad o conocimiento
            $table->enum('type', ['Valor', 'Habilidad', 'Conocimiento']);

            $table->string('name');
            $table->string('description');

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
        Schema::drop('skills');
    }
}
