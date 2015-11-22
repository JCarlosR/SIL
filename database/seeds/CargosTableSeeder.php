<?php

use App\Cargo;
use Illuminate\Database\Seeder;

class CargosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cargo::create([
            'MOF_id'  => 1,
            'unidad'  => 'Gerencia general',
            'nombre'  => 'Gerente general',
            'funcion' => 'Planificar, organizar, coordinar, dirigir, supervisar y evaluar todas las actividades asistenciales y técnico administrativas, que se desarrollan.'
        ]);

        Cargo::create([
            'MOF_id'  => 1,
            'unidad'  => 'Gerencia de operaciones',
            'nombre'  => 'Gerente de operaciones',
            'funcion' => 'Planificar, organizar, supervisar y evaluar el plan de atención la empresa cliente según requerimiento.'
        ]);
    }
}
