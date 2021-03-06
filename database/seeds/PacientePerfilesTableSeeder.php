<?php

use App\PacientePerfil;
use Illuminate\Database\Seeder;

class PacientePerfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PacientePerfil::create([
            'descripcion' => 'Trabajador en oficina'
        ]);
        PacientePerfil::create([
            'descripcion' => 'Trabajador en planta'
        ]);
    }
}
