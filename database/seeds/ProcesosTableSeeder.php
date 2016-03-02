<?php

use App\Proceso;
use Illuminate\Database\Seeder;

class ProcesosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Proceso::create([
            'nombre' => 'Recepcion de ordenes',
            'descripcion' => 'Recepcion de ordenes'
        ]);
        Proceso::create([
            'nombre' => 'Convocatoria de personal',
            'descripcion' => 'Convocatoria de personal'
        ]);
        Proceso::create([
            'nombre' => 'Seleccion de personal',
            'descripcion' => 'Seleccion de personal'
        ]);
        Proceso::create([
            'nombre' => 'Analisis del entorno laboral',
            'descripcion' => 'Analisis del entorno laboral'
        ]);
        Proceso::create([
            'nombre' => 'Realizacion de encuestas',
            'descripcion' => 'Realizacion de encuestas'
        ]);
        Proceso::create([
            'nombre' => 'Elaboracion del RIT',
            'descripcion' => 'Elaboracion del RIT'
        ]);
    }
}
