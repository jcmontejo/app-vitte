<?php

namespace Database\Seeders;

use App\Models\CatModeloBomba;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class upsertModelosBombas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $insert = new CatModeloBomba();
        $insert->strNombre = 'LMK2';
        $insert->dblCapacidadNominal = 0.5;
        $insert->save();

        $insert = new CatModeloBomba();
        $insert->strNombre = 'LMB2';
        $insert->dblCapacidadNominal = 0.8;
        $insert->save();

        $insert = new CatModeloBomba();
        $insert->strNombre = 'LMA2';
        $insert->dblCapacidadNominal = 0.9;
        $insert->save();

        $insert = new CatModeloBomba();
        $insert->strNombre = 'LMD3';
        $insert->dblCapacidadNominal = 1.9;
        $insert->save();

        $insert = new CatModeloBomba();
        $insert->strNombre = 'LMB3';
        $insert->dblCapacidadNominal = 1.9;
        $insert->save();

        $insert = new CatModeloBomba();
        $insert->strNombre = 'LMA3';
        $insert->dblCapacidadNominal = 1.9;
        $insert->save();

        $insert = new CatModeloBomba();
        $insert->strNombre = 'LMK3';
        $insert->dblCapacidadNominal = 2.3;
        $insert->save();

        $insert = new CatModeloBomba();
        $insert->strNombre = 'LMF4';
        $insert->dblCapacidadNominal = 3.2;
        $insert->save();

        $insert = new CatModeloBomba();
        $insert->strNombre = 'LMD4';
        $insert->dblCapacidadNominal = 3.4;
        $insert->save();

        $insert = new CatModeloBomba();
        $insert->strNombre = 'LMB4';
        $insert->dblCapacidadNominal = 3.8;
        $insert->save();

        $insert = new CatModeloBomba();
        $insert->strNombre = 'LMH4';
        $insert->dblCapacidadNominal = 6.4;
        $insert->save();

        $insert = new CatModeloBomba();
        $insert->strNombre = 'LMG4';
        $insert->dblCapacidadNominal = 6.6;
        $insert->save();

        $insert = new CatModeloBomba();
        $insert->strNombre = 'LME4';
        $insert->dblCapacidadNominal = 7;
        $insert->save();

        $insert = new CatModeloBomba();
        $insert->strNombre = 'LMK5';
        $insert->dblCapacidadNominal = 9.5;
        $insert->save();

        $insert = new CatModeloBomba();
        $insert->strNombre = 'LMH5';
        $insert->dblCapacidadNominal = 11.9;
        $insert->save();

        $insert = new CatModeloBomba();
        $insert->strNombre = 'LMG5';
        $insert->dblCapacidadNominal = 15.1;
        $insert->save();

        $insert = new CatModeloBomba();
        $insert->strNombre = 'LMH6';
        $insert->dblCapacidadNominal = 18.9;
        $insert->save();

        $insert = new CatModeloBomba();
        $insert->strNombre = 'LMK7';
        $insert->dblCapacidadNominal = 30.3;
        $insert->save();

        $insert = new CatModeloBomba();
        $insert->strNombre = 'LMH7';
        $insert->dblCapacidadNominal = 37.9;
        $insert->save();

        $insert = new CatModeloBomba();
        $insert->strNombre = 'LMH8';
        $insert->dblCapacidadNominal = 79.5;
        $insert->save();
    }
}
