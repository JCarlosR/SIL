<?php

use App\Titulo;
use Illuminate\Database\Seeder;

class TitulosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Titulo::create([
            'rit_id' => 1,
            'nombre' => 'TÍTULO PRIMERO'
        ]);
        Titulo::create([
            'rit_id' => 1,
            'nombre' => 'TÍTULO SEGUNDO'
        ]);
        Titulo::create([
            'rit_id' => 1,
            'nombre' => 'TÍTULO TERCERO'
        ]);
        Titulo::create([
            'rit_id' => 1,
            'nombre' => 'TÍTULO CUARTO'
        ]);
        Titulo::create([
            'rit_id' => 1,
            'nombre' => 'TÍTULO QUINTO'
        ]);
        Titulo::create([
            'rit_id' => 1,
            'nombre' => 'TÍTULO SEXTO'
        ]);
    }
}
