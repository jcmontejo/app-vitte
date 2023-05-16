<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Asistencia;
use App\Models\CarcamoBombeo;
use App\Models\Evidence;
use App\Models\Filtro;
use App\Models\HipocloritoConSensor;
use App\Models\MezcladorEstatico;
use App\Models\OxidacionDesinfeccion;
use App\Models\PhotoEvidence;
use App\Models\Plant\Catalogs\CatPlant;
use App\Models\Plant\Catalogs\Decloracion;
use App\Models\Plant\Catalogs\Desinfeccion;
use App\Models\Plant\Catalogs\Filtracion;
use App\Models\Plant\Catalogs\Incidence;
use App\Models\Plant\Catalogs\Osmosis;
use App\Models\Plant\Catalogs\Oxidacion;
use App\Models\Plant\Catalogs\WellPump;
use App\Models\Point;
use App\Models\Sedimentador;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class ApiController extends Controller
{
    public function getPlantas(Request $request)
    {
        $plantas = CatPlant::all();
        return response()->json($plantas);
    }

    public function getUserPoints(Request $request)
    {
        $userId = $request->intUser;
        $points = Point::where('user_id', $userId)
        ->join('evidences','evidences.point_id','points.id')
        ->select('points.*','evidences.id as evidence_id')
        ->get()
        ->map(function ($point){
            $coordinates = (object)['latitude'=> $point->latitude, 'longitude'=> $point->longitude];
            $point->coordinates = $coordinates;
            return $point;
        });

        return response()->json($points);
    }

    public function storeEvidence(Request $request)
    {
        // Obtener los datos de la solicitud
        $pointId = $request->input('point_id');
        $evidenceData = $request->input('evidence');
        $base64Image = $request->file('photo'); // Obtén la cadena base64 de la imagen desde tu formulario o cualquier otra fuente de datos

        // Guardar la evidencia
        $evidence = Evidence::find($request->evidence_id);
        $evidence->point_id = $pointId;
        $evidence->content = $evidenceData;

        // Guardar las evidencias fotográficas
        // Obtén la imagen desde la solicitud (datos binarios o cadena base64)
        $imageData = $request->input('photo');

        // Genera un nombre único para el archivo de imagen
        $fileName = uniqid() . '.jpg';
        // Decodifica la imagen base64 en datos binarios si es necesario
        if (Str::startsWith($imageData, 'data:image')) {
            $imageData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $imageData));
        }

        $photo_evidence = new PhotoEvidence();
        $photo_evidence->evidence_id = $evidence->id;
        $photo_evidence->photo_path = 'app/public/evidences/'.$fileName;

        // Actualizar el estado del punto a completado
        $point = Point::find($pointId);
        $point->status = 'completado';

        DB::transaction(function () use($evidence,$fileName,$imageData,$photo_evidence,$point){
            $evidence->save();
            // Guarda la imagen en el disco deseado
            Storage::disk('evidences')->put($fileName, $imageData);
            $photo_evidence->save();
            $point->save();
        });

        return response()->json(['message' => 'Evidencia guardada y punto actualizado']);
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
