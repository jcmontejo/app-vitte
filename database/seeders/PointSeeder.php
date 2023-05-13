<?php

namespace Database\Seeders;

use App\Models\Point;
use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Auth;

class PointSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('es_MX');

        $users = User::whereHas('type', function ($query) {
            $query->where('strTypeUser', 'Usuario Campo');
        })->pluck('id');

        $users_created = User::whereHas('type', function ($query) {
            $query->where('strTypeUser', 'Administrador');
        })->pluck('id');

        foreach (range(1, 10) as $index) {
            $point = new Point();
            $point->name = $faker->unique()->word;
            $point->address = $faker->address;
            $point->latitude = $faker->latitude;
            $point->longitude = $faker->longitude;
            $point->user_id = $faker->randomElement($users);
            $point->created_by = $faker->randomElement($users_created);
            $point->status = $faker->randomElement(['asignado']);
            $point->created_at = $faker->dateTimeBetween('-1 year', 'now');
            $point->save();
        }
    }
}
