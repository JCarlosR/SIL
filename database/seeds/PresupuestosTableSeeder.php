<?php

use Illuminate\Database\Seeder;
use App\Presupuesto;
class PresupuestosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Presupuesto::create([
            'area' => 1,
            'anual' => 2010,
            'presupuesto' => 5100,
            'real' => 5200,
        ]);
        Presupuesto::create([
            'area' => 1,
            'anual' => 2011,
            'presupuesto' => 5000,
            'real' => 4800,
        ]);
        Presupuesto::create([
            'area' => 1,
            'anual' => 2012,
            'presupuesto' => 6100,
            'real' => 5600,
        ]);
        Presupuesto::create([
            'area' => 1,
            'anual' => 2013,
            'presupuesto' => 5500,
            'real' => 5000,
        ]);
        Presupuesto::create([
            'area' => 1,
            'anual' => 2014,
            'presupuesto' => 4900,
            'real' => 5800,
        ]);
        Presupuesto::create([
            'area' => 1,
            'anual' => 2015,
            'presupuesto' => 6000,
            'real' => 6000,
        ]);
        Presupuesto::create([
            'area' => 2,
            'anual' => 2010,
            'presupuesto' => 7500,
            'real' => 7300,
        ]);
        Presupuesto::create([
            'area' => 2,
            'anual' => 2011,
            'presupuesto' => 7400,
            'real' => 7600,
        ]);
        Presupuesto::create([
            'area' => 2,
            'anual' => 2012,
            'presupuesto' => 6900,
            'real' => 6850,
        ]);
        Presupuesto::create([
            'area' => 2,
            'anual' => 2013,
            'presupuesto' => 7200,
            'real' => 7200,
        ]);
        Presupuesto::create([
            'area' => 2,
            'anual' => 2014,
            'presupuesto' => 7100,
            'real' => 6800,
        ]);
    }
}
