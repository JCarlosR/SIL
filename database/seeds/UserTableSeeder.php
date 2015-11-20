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
    }
}
