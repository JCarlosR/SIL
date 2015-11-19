<?php

use App\WorkerProfile;
use App\Skill;
use Illuminate\Database\Seeder;

class WorkerProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Perfil de trabajador asociado al primer usuario
        WorkerProfile::create([
            'user_id' => 1
        ]);

        // Registramos 3 valores de ejemplo
        Skill::create([
            'worker_profile_id' => 1,
            'type' => 'Valor',
            'name' => 'Empatía',
            'description' => 'Saber escuchar y ser comprensivo. Saber ponerse en el lugar de los demás. Tratar de buscar soluciones a los problemas que se les presentan a los compañeros de trabajo en las labores diarias.'
        ]);
        Skill::create([
            'worker_profile_id' => 1,
            'type' => 'Valor',
            'name' => 'Equilibrio emocional',
            'description' => 'Ante la eventualidad debe existir en si la tranquilidad y el actuar en forma normal. Todo individuo debe poseer este rasgo pues los desafíos impuestos por los cambios, son demasiado duros.'
        ]);
        Skill::create([
            'worker_profile_id' => 1,
            'type' => 'Valor',
            'name' => 'Etica',
            'description' => 'Ser correctos y actuar en el marco de los principios individuales y sociales, que yacen en el ambiente interno y externo a la organización.'
        ]);

        // Registramos 3 habilidades de ejemplo
        Skill::create([
            'worker_profile_id' => 1,
            'type' => 'Habilidad',
            'name' => 'Capacidad de análisis',
            'description' => 'Dentro del ámbito de las tareas que debe desempeñar, al momento de utilizar o desechar la información requerida para el cumplimiento de ellas, sobre todo cuando se trabaja sin supervisión directa.'
        ]);
        Skill::create([
            'worker_profile_id' => 1,
            'type' => 'Habilidad',
            'name' => 'Apertura',
            'description' => 'Saber trabajar en interrelación con los demás profesionales de la empresa. Capacidad para trabajar en equipo, en torno a un grupo de proyectos o círculos de calidad. Apertura también se refiere a vivir las realidades existentes más allá del propio ser.'
        ]);
        Skill::create([
            'worker_profile_id' => 1,
            'type' => 'Habilidad',
            'name' => 'Buen comunicador',
            'description' => 'Disponer de una cierta aptitud para la comunicación activa, y poseer la capacidad y la disposición para establecer una comunicación fluida y permanente.'
        ]);

        // Registramos 3 conocimientos de ejemplo
        Skill::create([
            'worker_profile_id' => 1,
            'type' => 'Conocimiento',
            'name' => 'Evaluar riesgos',
            'description' => 'Por que para tomar decisiones y actuar en forma rápida y correcta, como la empresa moderna lo requiere, se debe evaluar en forma clara y precisa las acciones a seguir.'
        ]);
        Skill::create([
            'worker_profile_id' => 1,
            'type' => 'Conocimiento',
            'name' => 'Polifuncionalidad',
            'description' => 'Este es uno de los rasgos que el trabajador moderno debe poseer con mayor intensidad. El trabajador actual debe estar capacitado para laborar en cualquier segmento de la empresa, y saber llevar a cabo las tareas que se le exijan o se le presenten en algún momento determinado.'
        ]);
        Skill::create([
            'worker_profile_id' => 1,
            'type' => 'Conocimiento',
            'name' => 'Conocer a la empresa',
            'description' => 'En la forma interna el trabajador moderno debe conocer las estrategias empresariales, la misión y visión de la empresa, la estructura en sí. En forma externa, debe saber lo que el cliente necesita y busca.'
        ]);
    }
}
