<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call(UserTableSeeder::class);

        // Juarez
        $this->call(PacientePerfilesTableSeeder::class);
        $this->call(ExamenesTableSeeder::class);

        // Ramos
        $this->call(WorkerProfilesTableSeeder::class);
        $this->call(MOFTableSeeder::class);
        $this->call(CargosTableSeeder::class);

        //SoleS
        $this->call(SolicitadosTableSeeder::class);

        // Villarroel
        $this->call(RitsTableSeeder::class);
        $this->call(TitulosTableSeeder::class);
        $this->call(CapitulosTableSeeder::class);
        $this->call(ArticulosTableSeeder::class);
        $this->call(ItemsTableSeeder::class);

        Model::reguard();
    }
}
