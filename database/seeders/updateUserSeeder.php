<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class updateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $insert = User::updateOrCreate([
            'email' => 'juancarlos.montejo@mail.com',
        ], [
            'name' => 'Juan Carlos',
            'strLastName' => 'Montejo',
            'intPhoneNumber' => '9612579168',
            'password' => Hash::make('secret'),
            'strPasswordText' => 'secret',

        ]);

        $insert = User::updateOrCreate([
            'email' => 'jose.vera@mail.com',
        ], [
            'name' => 'José',
            'strLastName' => 'Vera Vitte',
            'intPhoneNumber' => '9612579168',
            'password' => Hash::make('123456'),
            'strPasswordText' => '123456',
        ]);
    }
}
