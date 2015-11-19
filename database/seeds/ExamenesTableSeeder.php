<?php

use App\Examen;
use Illuminate\Database\Seeder;

class ExamenesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Examen::create([
            'nombre' => 'Espirometr�a',
            'pacienteperfil_id' => 1
        ]);
        Examen::create([
            'nombre' => 'Psicolog�a',
            'pacienteperfil_id' => 2
        ]);
        Examen::create([
            'nombre' => 'Rayos X',
            'pacienteperfil_id' => 2
        ]);
        Examen::create([
            'nombre' => 'Musculoesquel�tico',
            'pacienteperfil_id' => 1
        ]);
        Examen::create([
            'nombre' => 'Psicosensom�tricos',
            'pacienteperfil_id' => 1
        ]);
        Examen::create([
            'nombre' => 'Examen de Altura',
            'pacienteperfil_id' => 1
        ]);
        Examen::create([
            'nombre' => 'Laboratorio',
            'pacienteperfil_id' => 2
        ]);
        Examen::create([
            'nombre'=> 'Oftalmolog�a',
            'pacienteperfil_id' => 2
        ]);
    }
}
