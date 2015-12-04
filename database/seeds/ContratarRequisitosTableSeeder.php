<?php

use App\ContratarRequisito;
use Illuminate\Database\Seeder;

class ContratarRequisitosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ContratarRequisito::create([
            'cargo_id'=>1,
            'descripcion'=>'Experiencia laboral mínima de 2 anios'
        ]);
        ContratarRequisito::create([
            'cargo_id'=>1,
            'descripcion'=>'Especialización en gerencia empresarial'
        ]);
        ContratarRequisito::create([
            'cargo_id'=>1,
            'descripcion'=>'Egresado perteneciente al 5to superior'
        ]);
        ContratarRequisito::create([
            'cargo_id'=>2,
            'descripcion'=>'Especialización en gerencia de operaciones'
        ]);
        ContratarRequisito::create([
            'cargo_id'=>2,
            'descripcion'=>'Experiencia laboral 1 anio'
        ]);
        ContratarRequisito::create([
            'cargo_id'=>3,
            'descripcion'=>'Especialización en Logística'
        ]);
        ContratarRequisito::create([
            'cargo_id'=>3,
            'descripcion'=>'Especialización en ciencias administrativas'
        ]);
        ContratarRequisito::create([
            'cargo_id'=>3,
            'descripcion'=>'Experiencia laboral de 1.5 anios'
        ]);
        ContratarRequisito::create([
            'cargo_id'=>3,
            'descripcion'=>'Contador de especialidad'
        ]);
        ContratarRequisito::create([
            'cargo_id'=>4,
            'descripcion'=>'Experiencia laboral 2 anios'
        ]);
        ContratarRequisito::create([
            'cargo_id'=>4,
            'descripcion'=>'Especialista en Finanzas'
        ]);
        ContratarRequisito::create([
            'cargo_id'=>4,
            'descripcion'=>'Trabajo bajo presion'
        ]);
        ContratarRequisito::create([
            'cargo_id'=>4,
            'descripcion'=>'Disposición laboral'
        ]);
        ContratarRequisito::create([
            'cargo_id'=>6,
            'descripcion'=>'Especialista en atención ocupacional'
        ]);
        ContratarRequisito::create([
            'cargo_id'=>6,
            'descripcion'=>'Experiencia laboral 1 anio'
        ]);
        ContratarRequisito::create([
            'cargo_id'=>7,
            'descripcion'=>'Médico general'
        ]);
        ContratarRequisito::create([
            'cargo_id'=>7,
            'descripcion'=>'Experiencia laboral 2 anios'
        ]);
        ContratarRequisito::create([
            'cargo_id'=>7,
            'descripcion'=>'Especialista en salud ocupacional'
        ]);
        ContratarRequisito::create([
            'cargo_id'=>8,
            'descripcion'=>'Especialista en tratamiento Psicológico'
        ]);
        ContratarRequisito::create([
            'cargo_id'=>8,
            'descripcion'=>'Experiencia laboral 1.5 anios'
        ]);
        ContratarRequisito::create([
            'cargo_id'=>9,
            'descripcion'=>'Conocimientos en medición en de presión arterial'
        ]);
        ContratarRequisito::create([
            'cargo_id'=>9,
            'descripcion'=>'Conocimientos para realizar inyecciones'
        ]);
        ContratarRequisito::create([
            'cargo_id'=>9,
            'descripcion'=>'Experiencia laboral 1 anio'
        ]);
        ContratarRequisito::create([
            'cargo_id'=>12,
            'descripcion'=>'Buena presencia'
        ]);
        ContratarRequisito::create([
            'cargo_id'=>12,
            'descripcion'=>'Trabajar bajo presion'
        ]);
        ContratarRequisito::create([
            'cargo_id'=>12,
            'descripcion'=>'Egresada'
        ]);
        ContratarRequisito::create([
            'cargo_id'=>13,
            'descripcion'=>'Conocimientos avanzados en Química'
        ]);
        ContratarRequisito::create([
            'cargo_id'=>13,
            'descripcion'=>'Conocimientos avanzados en Física'
        ]);
        ContratarRequisito::create([
            'cargo_id'=>13,
            'descripcion'=>'Especialista en instrumentos de laboratorio'
        ]);
        ContratarRequisito::create([
            'cargo_id'=>15,
            'descripcion'=>'Conocimientos en Visual Basic / C#'
        ]);
        ContratarRequisito::create([
            'cargo_id'=>15,
            'descripcion'=>'Conocimientos en MySQL'
        ]);
        ContratarRequisito::create([
            'cargo_id'=>15,
            'descripcion'=>'Manejo de Frameworks Laravel Bootstrap'
        ]);
        ContratarRequisito::create([
            'cargo_id'=>15,
            'descripcion'=>'Experiencia laboral 1 anio'
        ]);
        ContratarRequisito::create([
            'cargo_id'=>16,
            'descripcion'=>'Conocimiento básico en libros contables'
        ]);
        ContratarRequisito::create([
            'cargo_id'=>16,
            'descripcion'=>'Experiencia laboral 1.5 anios'
        ]);
        ContratarRequisito::create([
            'cargo_id'=>17,
            'descripcion'=>'Predisposición laboral'
        ]);
        ContratarRequisito::create([
            'cargo_id'=>17,
            'descripcion'=>'Comprometido con la institución'
        ]);
    }
}
