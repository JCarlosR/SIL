<?php

use App\Rit;
use Illuminate\Database\Seeder;

class RitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rit::create([
            'objeto' => 'El presente Reglamento Interno de Trabajo  es un instrumento de carácter laboral que tiene como fin regular conforme a las disposiciones legales aplicables, la prestación de los servicios del personal que labora en Lezama Consultores de Salud Ocupacional,para tal efecto el presente reglamento tiene ámbito de aplicación interna y las autoridades responsables de su debido cumplimiento se encuentran señaladas en el capítulo único del título cuarto.',
            'alcance' => 'Las disposiciones del presente Reglamento son de estricto y obligatorio cumplimiento de los trabajadores que laboran en Lezama Consultores de Salud Ocupacional.'
        ]);
    }
}
