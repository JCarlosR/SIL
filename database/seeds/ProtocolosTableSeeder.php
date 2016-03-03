<?php

use App\Orden;
use App\Paciente;
use App\Protocolo;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProtocolosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i=0; $i<80; ++$i)
        {
            $aleatorio = $faker->numberBetween(1, 12);
            if ($aleatorio < 2) {
                $estado = 'Cancelado';
            } elseif ($aleatorio < 12) {
                $estado = 'Verificado';
            } else $estado = 'Pendiente';

            $protocolo = Protocolo::create([
                'empresa_id'  => $faker->numberBetween(1, 2),
                'estado'      => $estado,
                'observacion' => $faker->sentence,
                'created_at'  => ($estado=='Pendiente'?$faker->dateTimeBetween('-4 months', '-1 days'):$faker->dateTimeBetween('-1 years', '-1 days')),
            ]);

            // Para cada protocolo asignarle de 3 a 10 trabajadores
            $num_trabajadores = $faker->numberBetween(3, 10);
            for ($j=0; $j<$num_trabajadores; ++$j) {
                // Registrar cada trabajador como un paciente
                $paciente = Paciente::create([
                    'nombre'      => $faker->firstName,
                    'dni'         => $faker->numerify('########'),
                    'numhijos'    => $faker->numberBetween(0, 2),
                    'sexo'        => $faker->randomElement(['Masculino', 'Femenino']),
                    'gruposangre' => $faker->randomElement(['O-', 'O+', 'A−', 'A+', 'B−', 'B+', 'AB−', 'AB+']),
                    'pacienteperfil_id' => $faker->numberBetween(1, 2),
                ]);

                // Y asociar una orden a cada paciente
                $orden = Orden::create([
                    'protocolo_id' => $protocolo->id, 'paciente_id' => $paciente->id
                ]);
            }
        }
    }

}
