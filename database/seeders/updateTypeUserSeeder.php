<?php

namespace Database\Seeders;

use App\Models\TypeUser\Catalogs\CatTypeUser;
use Illuminate\Database\Seeder;

class updateTypeUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $insert = CatTypeUser::updateOrCreate([
            'strTypeUser' => 'Operador'
        ]);

        $insert = CatTypeUser::updateOrCreate([
            'strTypeUser' => 'Gerente'
        ]);

        $insert = CatTypeUser::updateOrCreate([
            'strTypeUser' => 'Directivo'
        ]);

        $insert = CatTypeUser::updateOrCreate([
            'strTypeUser' => 'Staff'
        ]);
    }
}
