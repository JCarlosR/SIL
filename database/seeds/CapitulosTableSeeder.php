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
            'romano' => 'I',
            'descripcion' => 'PROHIBICIONES DE LOS TRABAJADORES'
        ]);
        Capitulo::create([
            'titulo_id' => 2,
            'romano' => 'II',
            'descripcion' => 'JORNADAS DE TRABAJO Y CONTROL DE ASISTENCIA'
        ]);

        Capitulo::create([
            'titulo_id' => 3,
            'romano' => 'I',
            'descripcion' => 'MODALIDAD DE LOS DESCANSOS, VACACIONES Y PERMISOS'
        ]);
        Capitulo::create([
            'titulo_id' => 3,
            'romano' => 'II',
            'descripcion' => 'SALARIOS Y DE LAS PRESTACIONES ECONÓMICAS, SOCIALES Y CULTURALES'
        ]);

    }
}
