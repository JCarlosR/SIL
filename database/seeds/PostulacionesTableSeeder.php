<?php

use App\Postulacion;
use Illuminate\Database\Seeder;

class PostulacionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Postulacion::create([
            'postulante_id'=>1,
            'cargo_id'=>15,
            'fecha'=>'2015-11-10'
        ]);
        Postulacion::create([
            'postulante_id'=>2,
            'cargo_id'=>14,
            'fecha'=>'2015-12-3'
        ]);
        Postulacion::create([
            'postulante_id'=>3,
            'cargo_id'=>13,
            'fecha'=>'2015-6-1'
        ]);
        Postulacion::create([
            'postulante_id'=>4,
            'cargo_id'=>12,
            'fecha'=>'2015-5-8'
        ]);
        Postulacion::create([
            'postulante_id'=>5,
            'cargo_id'=>11,
            'fecha'=>'2015-5-10'
        ]);
        Postulacion::create([
            'postulante_id'=>6,
            'cargo_id'=>10,
            'fecha'=>'2015-2-10'
        ]);
        Postulacion::create([
            'postulante_id'=>7,
            'cargo_id'=>9,
            'fecha'=>'2015-5-6'
        ]);
        Postulacion::create([
            'postulante_id'=>8,
            'cargo_id'=>8,
            'fecha'=>'2015-11-10'
        ]);
        Postulacion::create([
            'postulante_id'=>9,
            'cargo_id'=>7,
            'fecha'=>'2015-1-20'
        ]);
        Postulacion::create([
            'postulante_id'=>10,
            'cargo_id'=>6,
            'fecha'=>'2015-6-8'
        ]);
        Postulacion::create([
            'postulante_id'=>11,
            'cargo_id'=>5,
            'fecha'=>'2015-1-1'
        ]);
        Postulacion::create([
            'postulante_id'=>12,
            'cargo_id'=>4,
            'fecha'=>'2015-1-1'
        ]);
        Postulacion::create([
            'postulante_id'=>13,
            'cargo_id'=>3,
            'fecha'=>'2015-1-1'
        ]);

        Postulacion::create([
            'postulante_id'=>14,
            'cargo_id'=>2,
            'fecha'=>'2015-1-1'
        ]);
        Postulacion::create([
            'postulante_id'=>15,
            'cargo_id'=>1,
            'fecha'=>'2015-1-1'
        ]);

    }
}
