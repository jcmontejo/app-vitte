<?php

namespace Database\Seeders;

use App\Models\TypeUser\Catalogs\CatTypeUser;
use Illuminate\Database\Seeder;

class TypeUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            ['strTypeUser' => 'Administrador'],
            ['strTypeUser' => 'Usuario Campo'],
            ['strTypeUser' => 'Invitado'],
        ];

        foreach ($types as $type) {
            CatTypeUser::updateOrCreate($type);
        }
    }
}
