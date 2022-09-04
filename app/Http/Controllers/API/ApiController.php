<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Plant\Catalogs\CatPlant;
use App\Models\Plant\Catalogs\Decloracion;
use App\Models\Plant\Catalogs\Desinfeccion;
use App\Models\Plant\Catalogs\Filtracion;
use App\Models\Plant\Catalogs\Incidence;
use App\Models\Plant\Catalogs\Osmosis;
use App\Models\Plant\Catalogs\Oxidacion;
use App\Models\Plant\Catalogs\WellPump;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getPlantas(Request $request)
    {
        $plantas = CatPlant::all();
        return response()->json($plantas);
    }

    public function getPlanta($dblCatPlant)
    {
        $planta = CatPlant::find($dblCatPlant);
        return response()->json($planta, 200);
    }

    public function storeBombaPozo(Request $request)
    {
        $planta = CatPlant::find($request->dblCatPlant);
        // Process bomba de pozo
        $oldWells = WellPump::where('dblCatPlant', $planta->dblCatPlant)->delete();
        $well = new WellPump();
        $well->indicator1 = $request->indicator1;
        $well->indicator2 = $request->indicator2;
        $well->indicator3 = $request->indicator3;
        $well->indicator4 = $request->indicator4;
        $well->dblCatPlant = $planta->dblCatPlant;
        $well->save();

        return response()->json(['message' => 'success', 'planta' => $planta], 200);
    }

    public function storeOxidacionCloro(Request $request)
    {
        $planta = CatPlant::find($request->dblCatPlant);
        //Process Oxidacion
        $oldOxidacion = Oxidacion::where('dblCatPlant', $planta->dblCatPlant)->delete();
        $oxidacion = new Oxidacion();
        $oxidacion->indicator1 = $request->indicatorOxidacion1;
        $oxidacion->indicator2 = $request->indicatorOxidacion2;
        $oxidacion->indicator3 = $request->indicatorOxidacion3;
        $oxidacion->dblCatPlant = $planta->dblCatPlant;
        $oxidacion->save();

        return response()->json(['message' => 'success', 'planta' => $planta], 200);
    }

    public function storeDecloracion(Request $request)
    {
        $planta = CatPlant::find($request->dblCatPlant);
        //Process Decloracion
        $oldDecloracion = Decloracion::where('dblCatPlant', $planta->dblCatPlant)->delete();
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
        //Process Filtracion
        $oldFiltracion = Filtracion::where('dblCatPlant', $planta->dblCatPlant)->delete();
        $filtracion = new Filtracion();
        $filtracion->indicator1 = $request->indicatorFiltracion1;
        $filtracion->indicator2 = $request->indicatorFiltracion2;
        $filtracion->indicator3 = $request->indicatorFiltracion3;
        $filtracion->indicator4 = $request->indicatorFiltracion4;
        $filtracion->dblCatPlant = $planta->dblCatPlant;
        $filtracion->save();

        return response()->json(['message' => 'success', 'planta' => $planta], 200);
    }

    public function storeOsmosis(Request $request)
    {
        $planta = CatPlant::find($request->dblCatPlant);
        //Process Osmosis
        $oldOsmosis = Osmosis::where('dblCatPlant', $planta->dblCatPlant)->delete();
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
        //Process Desinfeccion
        $oldDesinfeccion = Desinfeccion::where('dblCatPlant', $planta->dblCatPlant)->delete();
        $desinfeccion = new Desinfeccion();
        $desinfeccion->indicator1 = $request->indicatorDesinfeccion1;
        $desinfeccion->indicator2 = $request->indicatorDesinfeccion2;
        $desinfeccion->indicator3 = $request->indicatorDesinfeccion3;
        $desinfeccion->indicator4 = $request->indicatorDesinfeccion4;
        $desinfeccion->indicator5 = $request->indicatorDesinfeccion5;
        $desinfeccion->indicator6 = $request->indicatorDesinfeccion6;
        $desinfeccion->indicator7 = $request->indicatorDesinfeccion7;
        $desinfeccion->dblCatPlant = $planta->dblCatPlant;
        $desinfeccion->save();

        return response()->json(['message' => 'success', 'planta' => $planta], 200);
    }

    public function storeIncidencia(Request $request)
    {
        $planta = CatPlant::find($request->dblCatPlant);
        //Process incidence
        // $oldIncidences = Incidence::where('dblCatPlant', $obj->dblCatPlant)->delete();
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
