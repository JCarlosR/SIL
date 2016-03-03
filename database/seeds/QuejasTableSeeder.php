<?php

use App\Queja;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class QuejasTableSeeder extends Seeder
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
            $aleatorio = $faker->numberBetween(1, 10);
            if ($aleatorio < 2) {
                $estado = 'Omitida';
            } elseif ($aleatorio < 10) {
                $estado = 'Atendida';
            } else $estado = 'Pendiente';

            Queja::create([
                'email'       => $faker->email,
                'estado'      => $estado,
                'descripcion' => $faker->sentence,
                'created_at'  => ($estado=='Pendiente'?$faker->dateTimeBetween('-4 months', '-1 days'):$faker->dateTimeBetween('-1 years', '-1 days')),
            ]);
        }
    }
}
