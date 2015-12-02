<?php

use App\Capitulo;
use Illuminate\Database\Seeder;

class CapitulosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Capitulo::create([
            'titulo_id' => 1,
            'romano' => 'I',
            'descripcion' => 'OBLIGACIONES DE LA INSTITUCIÓN'
        ]);
        Capitulo::create([
            'titulo_id' => 1,
            'romano' => 'II',
            'descripcion' => 'OBLIGACIONES DE LOS TRABAJADORES'
        ]);

        Capitulo::create([
            'titulo_id' => 2,
            'romano' => 'III',
            'descripcion' => 'PROHIBICIONES DE LOS TRABAJADORES'
        ]);
        Capitulo::create([
            'titulo_id' => 2,
            'romano' => 'IV',
            'descripcion' => 'JORNADAS DE TRABAJO Y CONTROL DE ASISTENCIA'
        ]);

        Capitulo::create([
            'titulo_id' => 3,
            'romano' => 'V',
            'descripcion' => 'MODALIDAD DE LOS DESCANSOS, VACACIONES Y PERMISOS'
        ]);
        Capitulo::create([
            'titulo_id' => 3,
            'romano' => 'VI',
            'descripcion' => 'SALARIOS Y DE LAS PRESTACIONES ECONÓMICAS, SOCIALES Y CULTURALES'
        ]);

    }
}
