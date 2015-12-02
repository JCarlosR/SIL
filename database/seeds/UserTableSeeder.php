<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'full_name' => 'Ramos Suyón, Juan',
            'username' => 'jcarlos',
            'password' => Hash::make('123123')
        ]);

        User::create([
            'full_name' => 'Juárez Guzmán, Miguel',
            'username' => 'mjuarez',
            'password' => Hash::make('976976')
        ]);

        User::create([
            'full_name' => 'Gonzales Castillo, Jorge',
            'username' => 'jgonzales',
            'password' => Hash::make('123456')
        ]);

        User::create([
            'full_name' => 'Soles Cavero, Edilberto',
            'username' => 'SoleS',
            'password' => Hash::make('7654321')
        ]);

        User::create([
            'full_name' => 'Rivera Roman, Eduardo',
            'username' => 'eduardo0419',
            'password' => Hash::make('123456')
        ]);

        User::create([
            'full_name' => 'Villarroel Cruzado, José',
            'username' => 'jowil',
            'password' => Hash::make('123456')
        ]);
    }
}
