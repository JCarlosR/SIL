<?php

use App\Postulante;
use Illuminate\Database\Seeder;

class PostulantesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Postulante::create([
            'full_name'=>'Jacqueline Cerquin Ocas',
            'dni'=>'98701213',
            'email'=>'jacqueline@hotmail.com',
            'phone'=>'986712121',
            'address'=>'Trujillo - La Libertad',
            'cVitae'=>'98701213.docx',
            'estado'=>0
        ]);
        Postulante::create([
            'full_name'=>'Garcia Alcantara Gerson',
            'dni'=>'67689612',
            'email'=>'gerson_12@outlook.es',
            'phone'=>'891204567',
            'address'=>'Viru - La Libertad ',
            'cVitae'=>'67689612.docx',
            'estado'=>0
        ]);
        Postulante::create([
            'full_name'=>'Estefany Vazques Toledo',
            'dni'=>'82458912',
            'email'=>'EVtoledo@gmail.com',
            'phone'=>'891230467',
            'address'=>'Trujillo',
            'cVitae'=>'82458912.docx',
            'estado'=>0
        ]);
        Postulante::create([
            'full_name'=>'Cinthya Blas Vera',
            'dni'=>'35419876',
            'email'=>'cinthya_0@hotmail.com',
            'phone'=>'891205678',
            'address'=>'Chao - Viru',
            'cVitae'=>'35419876.docx',
            'estado'=>0
        ]);
        Postulante::create([
            'full_name'=>'Cristian Ravelo Saavedra',
            'dni'=>'61785643',
            'email'=>'cristian_viru@outlook.es',
            'phone'=>'98781245',
            'address'=>'Lima - Perú',
            'cVitae'=>'61785643.docx',
            'estado'=>0
        ]);
        Postulante::create([
            'full_name'=>'Esther Mozo Esquerre ',
            'dni'=>'91254387',
            'email'=>'mozoE_10@gmail.com',
            'phone'=>'984512087',
            'address'=>'La Esperanza',
            'cVitae'=>'91254387.docx',
            'estado'=>0
        ]);
        Postulante::create([
            'full_name'=>'Evelyn Mozo Esquerre',
            'dni'=>'87652098',
            'email'=>'evelyn@hotmail.com',
            'phone'=>'769804563',
            'address'=>'Viru',
            'cVitae'=>'87652098.docx',
            'estado'=>0
        ]);
        Postulante::create([
            'full_name'=>'Karla Perez Torres',
            'dni'=>'76901549',
            'email'=>'karla@gmail.com',
            'phone'=>'901587620',
            'address'=>'El Porvernir',
            'cVitae'=>'76901549.docx',
            'estado'=>0
        ]);
        Postulante::create([
            'full_name'=>'Yuleisi Abad Lozano',
            'dni'=>'91840876',
            'email'=>'abad_10@outlook.es',
            'phone'=>'981065394',
            'address'=>'El Porvenir',
            'cVitae'=>'91840876.docx',
            'estado'=>0
        ]);
        Postulante::create([
            'full_name'=>'Carmen Rodriguez',
            'dni'=>'78912304',
            'email'=>'carmenR_12@gmail.com',
            'phone'=>'671093654',
            'address'=>'Trujillo',
            'cVitae'=>'78912304.docx',
            'estado'=>0
        ]);
        Postulante::create([
            'full_name'=>'Moreno Carguayay',
            'dni'=>'90268000',
            'email'=>'moreno19@hotmail.com',
            'phone'=>'900067543',
            'address'=>'Trujillo',
            'cVitae'=>'90268000.docx',
            'estado'=>0
        ]);
        Postulante::create([
            'full_name'=>'Angelita Esperanza Vicente',
            'dni'=>'95501782',
            'email'=>'esperanza@gmail.com',
            'phone'=>'901278564',
            'address'=>'El provenir',
            'cVitae'=>'95501782.docx',
            'estado'=>1
        ]);
        Postulante::create([
            'full_name'=>'Sharick Aranda Cavero',
            'dni'=>'80129012',
            'email'=>'sharick@hotmail.com',
            'phone'=>'908978787',
            'address'=>'Trujillo  - Larco Helera',
            'cVitae'=>'80129012.docx',
            'estado'=>1
        ]);
        Postulante::create([
            'full_name'=>'Segundo Soles Cavero',
            'dni'=>'91019812',
            'email'=>'soles@hotmail.com',
            'phone'=>'910008120',
            'address'=>'La hermelinda',
            'cVitae'=>'91019812.docx',
            'estado'=>1
        ]);
        Postulante::create([
            'full_name'=>'Edinson Soles Cavero',
            'dni'=>'20108907',
            'email'=>'edinson_20@outlook.es',
            'phone'=>'910198001',
            'address'=>'Viru Viru',
            'cVitae'=>'20108907.docx',
            'estado'=>1
        ]);
        Postulante::create([
            'full_name'=>'Sheyla Aranda Cavero',
            'dni'=>'89098910',
            'email'=>'sheyla@hotmail.com',
            'phone'=>'990108907',
            'address'=>'Viru - Centro',
            'cVitae'=>'89098910.docx',
            'estado'=>1
        ]);
        Postulante::create([
            'full_name'=>'Jorge Urquiza',
            'dni'=>'99998910',
            'email'=>'jorge_U@hotmail.com',
            'phone'=>'440108907',
            'address'=>'Viru - Centro',
            'cVitae'=>'99998910.docx',
            'estado'=>1
        ]);
    }
}

