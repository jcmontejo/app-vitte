<?php

namespace Database\Seeders;

use App\Models\TypeUser\Catalogs\CatTypeUser;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $adminRole = Role::where('name', 'admin-otra-plataforma')->first();

        for ($i = 0; $i < 5; $i++) {
            $user = User::updateOrCreate(
                [
                    'strLastName' => $faker->lastName,
                    'strAddress' => $faker->address,
                    'intPhoneNumber' => $faker->phoneNumber,
                    'email' => $faker->unique()->safeEmail,
                ],
                [
                    'intConsecutive' => $i + 1,
                    'datCreate' => now(),
                    'name' => $faker->name,
                    'password' => Hash::make('password'),
                    'strPasswordText' => 'password',
                    'dblCatTypeUser' => CatTypeUser::inRandomOrder()->whereIn('strTypeUser', ['Administrador', 'Usuario Campo'])->first()->dblCatTypeUser,
                ]
            );
            // Asignar el rol "admin-otra-plataforma" a los usuarios Administrador
            if ($user->dbCatTypeUser === 'Administrador') {
                $user->assignRole($adminRole);
            }
        }
    }
}
