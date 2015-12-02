<?php

use App\Item;
use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::create([
            'articulo_id' => 1,
            'romano' => 'I',
            'descripcion' => 'Cumplir con las normas de trabajo aplicables.'
        ]);
        Item::create([
            'articulo_id' => 1,
            'romano' => 'II',
            'descripcion' => 'Expedir y dar a conocer entre los trabajadores las normas que permitan el cumplimiento de las condiciones, políticas, criterios y procedimientos en general encaminados a mantener el orden, la disciplina y el buen funcionamiento del centro de trabajo.'
        ]);
        Item::create([
            'articulo_id' => 1,
            'romano' => 'III',
            'descripcion' => 'Expedir a favor del trabajador que tenga derecho, el nombramiento de acuerdo a la categoría que desempeñe.'
        ]);
        Item::create([
            'articulo_id' => 1,
            'romano' => 'IV',
            'descripcion' => 'Cubrir el salario de los trabajadores y las demás prestaciones y beneficios a que tenga derecho el trabajador.'
        ]);

        Item::create([
            'articulo_id' => 2,
            'romano' => 'I',
            'descripcion' => 'Cumplir con las normas de trabajo que les sean aplicables.'
        ]);
        Item::create([
            'articulo_id' => 2,
            'romano' => 'II',
            'descripcion' => 'Cumplir con todas las normas de orden técnico y administrativo que dicte la Institución a través de manuales, reglamentos, circulares o reglas de carácter general o especial.'
        ]);
        Item::create([
            'articulo_id' => 2,
            'romano' => 'III',
            'descripcion' => 'Acatar las órdenes e instrucciones que reciban de superiores, en atención al servicio que prestan.'
        ]);
        Item::create([
            'articulo_id' => 2,
            'romano' => 'IV',
            'descripcion' => 'Observar las medidas preventivas de seguridad e higiene que contemplen las normas a que están sujetos, así como las que indiquen las autoridades competentes y la institución en beneficio de los trabajadores y del centro de trabajo.'
        ]);

    }
}
