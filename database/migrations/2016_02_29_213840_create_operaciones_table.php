<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operacions', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('proceso');
            $table->decimal('operacion', 6,3);
            $table->decimal('transporte', 6, 3);
            $table->decimal('inspeccion', 6, 3);
            $table->decimal('demora', 6, 3);
            $table->decimal('almacenaje', 6, 3);
            $table->decimal('combinada', 6, 3);

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
        Schema::drop('operacions');
    }
}
