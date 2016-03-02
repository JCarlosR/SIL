<?php

use App\Operacion;
use Illuminate\Database\Seeder;

class OperacionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Operacion::create([
            'proceso' => 1,
            'operacion' => 20,
            'transporte' => 10,
            'inspeccion' => 20,
            'demora' => 30,
            'almacenaje' => 5,
            'combinada' => 5,
        ]);

        Operacion::create([
            'proceso' => 2,
            'operacion' => 10,
            'transporte' => 20,
            'inspeccion' => 5,
            'demora' => 10,
            'almacenaje' => 15,
            'combinada' => 10,
        ]);

        Operacion::create([
            'proceso' => 3,
            'operacion' => 5,
            'transporte' => 10,
            'inspeccion' => 15,
            'demora' => 20,
            'almacenaje' => 10,
            'combinada' => 5,
        ]);

        Operacion::create([
            'proceso' => 4,
            'operacion' => 15,
            'transporte' => 6,
            'inspeccion' => 20,
            'demora' => 5,
            'almacenaje' => 10,
            'combinada' => 15,
        ]);
    }

}
