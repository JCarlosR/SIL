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
            'nombre' => 'Espirometría',
            'pacienteperfil_id' => 1
        ]);
        Examen::create([
            'nombre' => 'Psicología',
            'pacienteperfil_id' => 2
        ]);
        Examen::create([
            'nombre' => 'Rayos X',
            'pacienteperfil_id' => 2
        ]);
        Examen::create([
            'nombre' => 'Musculoesquelético',
            'pacienteperfil_id' => 1
        ]);
        Examen::create([
            'nombre' => 'Psicosensométricos',
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
            'nombre'=> 'Oftalmología',
            'pacienteperfil_id' => 2
        ]);
    }
}
