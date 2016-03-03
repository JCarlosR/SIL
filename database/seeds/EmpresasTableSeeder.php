<?php


use App\Empresa;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class EmpresasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Empresa::create([
            'nombre_comercial' => 'Cartavio S.A.A',
            'ruc' => '20131867744',
            'web' => 'www.complejocartavio.com.pe',
            'contacto1' => '432034',
            'contacto2' => '432039',
            'created_at' => Carbon::create(2012, 7, 10)
        ]);
        Empresa::create([
            'nombre_comercial' => 'AGROINDUSTRIAL LAREDO S.A.A. ',
            'ruc' => '20132377783',
            'web' => 'www.agroindustriallaredo.com/',
            'contacto1' => '445028 ',
            'contacto2' => '435539 ',
            'created_at' => Carbon::create(2015, 8, 14)
        ]);

    }
}
