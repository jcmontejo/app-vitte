<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Asistencia;
use App\Models\CarcamoBombeo;
use App\Models\Filtro;
use App\Models\HipocloritoConSensor;
use App\Models\MezcladorEstatico;
use App\Models\OxidacionDesinfeccion;
use App\Models\Plant\Catalogs\CatPlant;
use App\Models\Plant\Catalogs\Decloracion;
use App\Models\Plant\Catalogs\Desinfeccion;
use App\Models\Plant\Catalogs\Filtracion;
use App\Models\Plant\Catalogs\Incidence;
use App\Models\Plant\Catalogs\Osmosis;
use App\Models\Plant\Catalogs\Oxidacion;
use App\Models\Plant\Catalogs\WellPump;
use App\Models\Sedimentador;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getPlantas(Request $request)
    {
        $plantas = CatPlant::all();
        return response()->json($plantas);
    }

    public function getPlanta(Request $request)
    {
        $planta = CatPlant::find($request->dblCatPlant);

        $filtros = Filtro::where('dblCatPlant',$request->dblCatPlant)->get();
        if ($planta) {
            $asistencia = new Asistencia();
            $asistencia->intUser = $request->intUser;
            $asistencia->dblCatPlant = $planta->dblCatPlant;
            $asistencia->save();
        }
        return response()->json([
            'planta' => $planta,
            'filtros' => $filtros
        ],200);
    }

    public function storeBombaPozo(Request $request)
    {
        $planta = CatPlant::find($request->dblCatPlant);

        $well = new WellPump();
        $well->indicator1 = $request->indicator1;
        $well->indicator2 = $request->indicator2;
        $well->indicator3 = $request->indicator3;
        $well->intUser = $request->intUser;
        $well->dblCatPlant = $planta->dblCatPlant;
        $well->save();

        return response()->json(['message' => 'success', 'planta' => $planta], 200);
    }

    public function storeOxidacionCloro(Request $request)
    {
        $planta = CatPlant::find($request->dblCatPlant);

        $oxidacion = new Oxidacion();
        $oxidacion->indicator1 = $request->indicatorOxidacion1;
        $oxidacion->indicator2 = $request->indicatorOxidacion2;
        $oxidacion->intUser = $request->intUser;
        $oxidacion->dblCatPlant = $planta->dblCatPlant;
        $oxidacion->save();

        return response()->json(['message' => 'success', 'planta' => $planta], 200);
    }

    public function storeDecloracion(Request $request)
    {
        $planta = CatPlant::find($request->dblCatPlant);

        $decloracion = new Decloracion();
        $decloracion->indicator1 = $request->indicatorDecloracion1;
        $decloracion->indicator2 = $request->indicatorDecloracion2;
        $decloracion->indicator3 = $request->indicatorDecloracion3;
        $decloracion->dblCatPlant = $planta->dblCatPlant;
        $decloracion->save();

        return response()->json(['message' => 'success', 'planta' => $planta], 200);
    }

    public function storeFiltracion(Request $request)
    {
        $planta = CatPlant::find($request->dblCatPlant);

        $filtracion = new Filtracion();
        $filtracion->indicator1 = $request->indicatorFiltracion1;
        $filtracion->indicator2 = $request->indicatorFiltracion2;
        $filtracion->intFiltro = $request->intFiltro;
        $filtracion->intUser = $request->intUser;
        $filtracion->dblCatPlant = $planta->dblCatPlant;
        $filtracion->save();

        return response()->json(['message' => 'success', 'planta' => $planta], 200);
    }

    public function storeOsmosis(Request $request)
    {
        $planta = CatPlant::find($request->dblCatPlant);

        $osmosis = new Osmosis();
        $osmosis->indicator1 = $request->indicatorOsmosis1;
        $osmosis->indicator2 = $request->indicatorOsmosis2;
        $osmosis->indicator3 = $request->indicatorOsmosis3;
        $osmosis->indicator4 = $request->indicatorOsmosis4;
        $osmosis->dblCatPlant = $planta->dblCatPlant;
        $osmosis->save();
        return response()->json(['message' => 'success', 'planta' => $planta], 200);
    }

    public function storeDesinfeccion(Request $request)
    {
        $planta = CatPlant::find($request->dblCatPlant);

        $desinfeccion = new Desinfeccion();
        $desinfeccion->indicator1 = $request->indicatorDesinfeccion1;
        $desinfeccion->indicator2 = $request->indicatorDesinfeccion2;
        $desinfeccion->intUser = $request->intUser;
        $desinfeccion->dblCatPlant = $planta->dblCatPlant;
        $desinfeccion->save();

        return response()->json(['message' => 'success', 'planta' => $planta], 200);
    }

    public function storeOxidacionDesinfeccion(Request $request)
    {
        $planta = CatPlant::find($request->dblCatPlant);

        $newRegister = new OxidacionDesinfeccion();
        $newRegister->indicator1 = $request->indicator1;
        $newRegister->indicator2 = $request->indicator2;
        $newRegister->indicator3 = $request->indicator3;
        $newRegister->intUser = $request->intUser;
        $newRegister->dblCatPlant = $planta->dblCatPlant;
        $newRegister->save();

        return response()->json(['message'=>'success','planta'=>$planta],200);
    }

    public function storeMezcladorEstatico(Request $request)
    {
        $planta = CatPlant::find($request->dblCatPlant);

        $newRegister = new MezcladorEstatico();
        $newRegister->indicator1 = $request->indicator1;
        $newRegister->indicator2 = $request->indicator2;
        $newRegister->intUser = $request->intUser;
        $newRegister->dblCatPlant = $planta->dblCatPlant;
        $newRegister->save();

        return response()->json(['message'=>'success','planta'=>$planta],200);
    }

    public function storeHipocloritoConSensor(Request $request)
    {
        $planta = CatPlant::find($request->dblCatPlant);

        $newRegister = new HipocloritoConSensor();
        $newRegister->indicator1 = $request->indicator1;
        $newRegister->intUser = $request->intUser;
        $newRegister->dblCatPlant = $planta->dblCatPlant;
        $newRegister->save();

        return response()->json(['message'=>'success','planta'=>$planta],200);
    }

    public function storeCarcamoBombeo(Request $request)
    {
        $planta = CatPlant::find($request->dblCatPlant);

        $newRegister = new CarcamoBombeo();
        $newRegister->indicator1 = $request->indicator1;
        $newRegister->intUser = $request->intUser;
        $newRegister->dblCatPlant = $planta->dblCatPlant;
        $newRegister->save();

        return response()->json(['message'=>'success','planta'=>$planta],200);
    }

    public function storeSedimentador(Request $request)
    {
        $planta = CatPlant::find($request->dblCatPlant);

        $newRegister = new Sedimentador();
        $newRegister->indicator1 = $request->indicator1;
        $newRegister->intUser = $request->intUser;
        $newRegister->dblCatPlant = $planta->dblCatPlant;
        $newRegister->save();

        return response()->json(['message'=>'success','planta'=>$planta],200);
    }

    public function storeIncidencia(Request $request)
    {
        $planta = CatPlant::find($request->dblCatPlant);

        if ($request->capacidad != "" or $request->presion != "" or $request->problemasCalidad != "" or $planta->dblCatPlant != "") {
            $well = new Incidence();
            $well->indicator1 = $request->capacidad;
            $well->indicator2 = $request->presion;
            $well->indicator3 = $request->problemasCalidad;
            $well->indicator4 = $request->potabilizacion;
            $well->dblCatPlant = $planta->dblCatPlant;
            $well->save();
        }

        return response()->json(['message' => 'success', 'planta' => $planta], 200);
    }
}
