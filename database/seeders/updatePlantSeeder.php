<?php

namespace Database\Seeders;

use App\Models\Plant\Catalogs\CatPlant;
use Illuminate\Database\Seeder;

class updatePlantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $insert = CatPlant::updateOrCreate([
            'strName' => 'PLANTA POTABILIZADORA "VIA VALLEJO"',
        ],
            [
                'strAddress' => 'Nte 35 815, Sta Cruz de las Salinas, Azcapotzalco, 02340 Ciudad de México, CDMX',
                'intLatitude' => '9.4874737',
                'intLongitude' => '-99.1557317',
            ]);

        $insert = CatPlant::updateOrCreate([
            'strName' => 'PLANTA POTABILIZADORA JARDÍN BALBUENA',
        ],
            [
                'strAddress' => 'Luis de La Rosa s/n, Jardín Balbuena, Venustiano Carranza, 15900 Ciudad de México, CDMX',
                'intLatitude' => '9.4874737',
                'intLongitude' => '-99.1557317',
            ]);

        $insert = CatPlant::updateOrCreate([
            'strName' => 'PLANTA PÓTABILIZADORA VALLE DEL TEPEYAC',
        ],
            [
                'strAddress' => 'Nueva Industrial Vallejo, Gustavo A. Madero, 07700 Mexico City',
                'intLatitude' => '9.4874737',
                'intLongitude' => '-99.1557317',
            ]);

        $insert = CatPlant::updateOrCreate([
            'strName' => 'PLANTA POTABILIZADORA GRANJAS SAN ANTONIO',
        ],
            [
                'strAddress' => 'Culturas Prehispánica 151-185, Granjas San Antonio, Iztapalapa, 09070 Ciudad de México, CDMX',
                'intLatitude' => '9.4874737',
                'intLongitude' => '-99.1557317',
            ]);

        $insert = CatPlant::updateOrCreate([
            'strName' => 'Planta Potabilizadora Xaltepec - SACMEX',
        ],
            [
                'strAddress' => 'Parque Ecológico de Xochimilco, Xochimilco, 16036 Mexico City',
                'intLatitude' => '9.4874737',
                'intLongitude' => '-99.1557317',
            ]);
    }
}
