<?php

use App\Articulo;
use Illuminate\Database\Seeder;

class ArticulosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Articulo::create([
            'capitulo_id' => 1,
            'descripcion' => 'Son obligaciones de la Institución:'
        ]);
        Articulo::create([
            'capitulo_id' => 1,
            'descripcion' => 'El trabajador tiene las siguientes obligaciones:'
        ]);

        Articulo::create([
            'capitulo_id' => 2,
            'descripcion' => 'Queda estrictamente prohibido a los trabajadores:'
        ]);
        Articulo::create([
            'capitulo_id' => 2,
            'descripcion' => 'Los trabajadores estarán sujetos a laborar como máximo cuarenta y ocho horas a la semana, distribuyendo éstas conforme a su horario contratado.'
        ]);

        Articulo::create([
            'capitulo_id' => 3,
            'descripcion' => 'La duración de la jornada de trabajo será:'
        ]);
        Articulo::create([
            'capitulo_id' => 3,
            'descripcion' => 'Las incidencias derivadas del control de asistencia se regirán por las disposiciones siguientes:'
        ]);

        Articulo::create([
            'capitulo_id' => 4,
            'descripcion' => 'El suplente que no acuda a laborar habiendo firmado la hoja de suplencia, será sancionado con amonestación por escrito y hasta del derecho de seguir haciendo suplencias.'
        ]);
        Articulo::create([
            'capitulo_id' => 4,
            'descripcion' => 'Se consideran días de trabajo con descanso obligatorio los siguientes:'
        ]);
    }
}
