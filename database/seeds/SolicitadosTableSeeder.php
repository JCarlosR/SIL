<?php

use App\Solicitado;
use Illuminate\Database\Seeder;

class SolicitadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Solicitado::create([ 'cargo_id' => 1, 'estado' => 0 ]);
        Solicitado::create([ 'cargo_id' => 2, 'estado' => 0 ]);
        Solicitado::create([ 'cargo_id' => 3, 'estado' => 0 ]);
        Solicitado::create([ 'cargo_id' => 4, 'estado' => 0 ]);
        Solicitado::create([ 'cargo_id' => 5, 'estado' => 0 ]);
        Solicitado::create([ 'cargo_id' => 6, 'estado' => 0 ]);
        Solicitado::create([ 'cargo_id' => 7, 'estado' => 0 ]);
        Solicitado::create([ 'cargo_id' => 8, 'estado' => 0 ]);
        Solicitado::create([ 'cargo_id' => 9, 'estado' => 0 ]);
        Solicitado::create([ 'cargo_id' => 10, 'estado' => 1 ]);
        Solicitado::create([ 'cargo_id' => 11, 'estado' => 1 ]);
        Solicitado::create([ 'cargo_id' => 12, 'estado' => 1 ]);
        Solicitado::create([ 'cargo_id' => 13, 'estado' => 1 ]);
        Solicitado::create([ 'cargo_id' => 14, 'estado' => 1 ]);
        Solicitado::create([ 'cargo_id' => 15, 'estado' => 1 ]);
        Solicitado::create([ 'cargo_id' => 16, 'estado' => 1 ]);
        Solicitado::create([ 'cargo_id' => 17, 'estado' => 1 ]);
    }
}
