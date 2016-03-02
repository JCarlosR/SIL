<?php

use App\Area;
use Illuminate\Database\Seeder;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Area::create([
            'nombre' => 'Sistemas',
            'descripcion' => 'Sistemas',
            'responsable' => 'Juan Perez Gamboa'
        ]);
        Area::create([
            'nombre' => 'Contabilidad',
            'descripcion' => 'Contabilidad',
            'responsable' => 'Luis Chavez '
        ]);
        Area::create([
            'nombre' => 'Finanzas',
            'descripcion' => 'Finanzas',
            'responsable' => 'Armando Quiroz'
        ]);
        Area::create([
            'nombre' => 'Recursos Humanos',
            'descripcion' => 'Recursos Humanos',
            'responsable' => 'Jason Grace'
        ]);

    }
}
