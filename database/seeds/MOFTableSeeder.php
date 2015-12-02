<?php

use App\MOF;
use Illuminate\Database\Seeder;

class MOFTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MOF::create([
            'user_id'     => 1,
            'finalidad'   => 'El manual de organización y funciones, es un documento normativo que tiene por finalidad establecer la estructura organizativa y funcional de Lezama Consultores de Salud Ocupacional S.C.R.L. y servir de instrumento orientador y regulador de las actividades del personal que labora en ella.',
            'alcance'     => 'El ámbito de aplicación del presente manual es Lezama Consultores de Salud Ocupacional S.C.R.L.',
            'organigrama' => 'organigrama.jpg'
        ]);
    }
}
