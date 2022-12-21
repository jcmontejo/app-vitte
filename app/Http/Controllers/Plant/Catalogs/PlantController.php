<?php

namespace App\Http\Controllers\Plant\Catalogs;

use App\Http\Controllers\Controller;
use App\Models\CatModeloBomba;
use App\Models\Filtro;
use App\Models\Plant\Catalogs\CatPlant;
use App\Models\Plant\Catalogs\Decloracion;
use App\Models\Plant\Catalogs\Desinfeccion;
use App\Models\Plant\Catalogs\Filtracion;
use App\Models\Plant\Catalogs\Incidence;
use App\Models\Plant\Catalogs\Osmosis;
use App\Models\Plant\Catalogs\Oxidacion;
use App\Models\Plant\Catalogs\WellPump;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PlantController extends Controller
{
    public function index(Request $request)
    {
        $page_title = 'Plantas';
        $message = $request->session()->get('message');
        $objs = CatPlant::all();

        $params = [
            'page_title',
            'message',
            'objs',
            'request',
        ];
        return view('Plant.Catalogs.catPlantCons', compact($params));
    }

    public function create(Request $request)
    {
        $page_title = 'Crear Planta';
        $message = $request->session()->get('message');
        $trasheds = [];
        $incidences = [];
        $obj = new CatPlant();
        $objBombas = CatModeloBomba::all();
        return view('Plant.Catalogs.catPlant', compact('page_title', 'obj', 'objBombas', 'trasheds', 'incidences'));
    }

    public function store(Request $request)
    {
        request()->validate([
            'strName' => 'min:3|required',
        ]);
        $obj = new CatPlant();
        $obj->strName = $request->strName;
        $obj->strAddress = $request->strAddress;
        $obj->intLongitude = $request->intLongitude;
        $obj->intLongitude = $request->intLongitude;
        $obj->save();

        $request->session()->flash('message', 'El registro ha sido guardado!');

        return redirect()->route('plant.index');
    }

    public function edit(Request $request, $dblCatPlant)
    {
        $page_title = 'Editar Planta';
        $method = $request->method();
        $obj = CatPlant::findOrFail($dblCatPlant);
        $objFiltros = Filtro::where('dblCatPlant',$dblCatPlant)->get();
        $objBombas = CatModeloBomba::all();
        $historialBombaDePozo = WellPump::leftJoin('users as t2','t2.id','tblProcessWellPump.intUser')->where('tblProcessWellPump.dblCatPlant', $obj->dblCatPlant)->get();
        $historialOxidacion = Oxidacion::leftJoin('users as t2','t2.id','tblProcessOxidacion.intUser')
            ->join('tblCatPlant as t3','t3.dblCatPlant','tblProcessOxidacion.dblCatPlant')
            ->leftJoin('catModeloBomba as t4','t4.id','t3.intModeloBomba')
            ->where('tblProcessOxidacion.dblCatPlant', $obj->dblCatPlant)
            ->get()
            ->map(function($obj){
                $alerta = '';
                $dblCapacidadNominal = $obj->dblCapacidadNominal ?? 0;
                $flujoReal = (($obj->indicator1/100)*($obj->indicator2/100))*$dblCapacidadNominal;
                $fb = $flujoReal/1.5;
                $fa = $flujoReal*1.5;
                if ($flujoReal<$fb) {
                    $alerta = 'Flujo bajo, aumente velocidad del golpe y/o longitud del golpe.';
                }elseif ($flujoReal>$fa) {
                    $alerta = 'Flujo alto, reduzaca velocidad del golpe y/o longitud del golpe.';
                }else{
                    $alerta = 'Flujo adecuado';
                }
            $obj->capacidadNom = $dblCapacidadNominal;
            $obj->flujoDosificado = number_format($flujoReal,2);
            $obj->alerta = $alerta;
            return $obj;
            });

            $historialDesinfeccion = Desinfeccion::leftJoin('users as t2','t2.id','tblProcessDesinfeccion.intUser')
            ->join('tblCatPlant as t3','t3.dblCatPlant','tblProcessDesinfeccion.dblCatPlant')
            ->leftJoin('catModeloBomba as t4','t4.id','t3.intModeloBomba')
            ->where('tblProcessDesinfeccion.dblCatPlant', $obj->dblCatPlant)
            ->get()
            ->map(function($obj){
                $alerta = '';
                $dblCapacidadNominal = $obj->dblCapacidadNominal ?? 0;
                $flujoReal = (($obj->indicator1/100)*($obj->indicator2/100))*$dblCapacidadNominal;
                $fb = $flujoReal/1.5;
                $fa = $flujoReal*1.5;
                if ($flujoReal<$fb) {
                    $alerta = 'Flujo bajo, aumente velocidad del golpe y/o longitud del golpe.';
                }elseif ($flujoReal>$fa) {
                    $alerta = 'Flujo alto, reduzaca velocidad del golpe y/o longitud del golpe.';
                }else{
                    $alerta = 'Flujo adecuado';
                }
            // calculo cloro residual
            $alertaCloro = '';
            $dblFactorCloroResidual = $obj->dblFactorCloroResidual ?? 0;
            $cloroResidual = $flujoReal * $dblFactorCloroResidual;
            if ($cloroResidual <= 0.2) {
                $alertaCloro = 'Cloro residual bajo, aumente velocidad de carrera y/o pulsos';
            }elseif ($cloroResidual>= 1.5) {
                $alertaCloro = 'Cloro residual alto, reduzca velocidad de carrera y/o pulsos';
            }else{
                $alertaCloro = 'CLORO RESIDUAL ADECUADO';
            }
            $obj->capacidadNom = $dblCapacidadNominal;
            $obj->flujoDosificado = number_format($flujoReal,2);
            $obj->alerta = $alerta;
            $obj->cloroResidual = number_format($cloroResidual);
            $obj->alertaCloro = $alertaCloro;
            return $obj;
            });
            // dd($historialDesinfeccion);
        $incidences = Incidence::where('dblCatPlant', $obj->dblCatPlant)->get();
        return view('Plant.Catalogs.catPlant', compact('page_title', 'obj', 'objFiltros', 'objBombas', 'historialBombaDePozo', 'historialOxidacion', 'historialDesinfeccion', 'incidences'));
    }

    public function update(Request $request)
    {
        request()->validate([
            'strName' => 'min:3|required',
        ]);
        DB::transaction(function () use ($request) {
            // update Plant
            $obj = CatPlant::findOrFail($request->dblCatPlant);
            $obj->strName = $request->strName;
            $obj->strAddress = $request->strAddress;
            $obj->intLongitude = $request->intLongitude;
            $obj->intLongitude = $request->intLongitude;
            $obj->dblFactorCloroResidual = $request->dblFactorCloroResidual;
            $obj->dblFlujoDisenioOxidante = $request->dblFlujoDisenioOxidante;
            $obj->intModeloBomba = $request->intModeloBomba;
            $obj->save();

            $intFiltro = $request->intFiltro ?? [];
            $strNombreFiltro = $request->strNombreFiltro ?? [];
            $oldFiltros = Filtro::where('dblCatPlant', $obj->dblCatPlant)->whereNotIn('id',$intFiltro)->delete();
            foreach ($strNombreFiltro as $key => $value) {
                $filtro = Filtro::findOrNew($intFiltro[$key]);
                $filtro->strNombre = $strNombreFiltro[$key];
                $filtro->dblCatPlant = $obj->dblCatPlant;
                $filtro->save();
            }

            //Process well pump
            // $oldWells = WellPump::where('dblCatPlant', $obj->dblCatPlant)->delete();
            $well = new WellPump();
            $well->indicator1 = $request->indicator1;
            $well->indicator2 = $request->indicator2;
            $well->indicator3 = $request->indicator3;
            $well->intUser = Auth::user()->id;
            // $well->indicator4 = $request->indicator4;
            $well->dblCatPlant = $obj->dblCatPlant;
            // $well->save();

            //Process Oxidacion
            // $oldOxidacion = Oxidacion::where('dblCatPlant', $obj->dblCatPlant)->delete();
            $oxidacion = new Oxidacion();
            $oxidacion->indicator1 = $request->indicatorOxidacion1;
            $oxidacion->indicator2 = $request->indicatorOxidacion2;
            $oxidacion->intUser = Auth::user()->id;
            // $oxidacion->indicator3 = $request->indicatorOxidacion3;
            $oxidacion->dblCatPlant = $obj->dblCatPlant;
            // $oxidacion->save();

            //Process Decloracion
            $oldDecloracion = Decloracion::where('dblCatPlant', $obj->dblCatPlant)->delete();
            $decloracion = new Decloracion();
            $decloracion->indicator1 = $request->indicatorDecloracion1;
            $decloracion->indicator2 = $request->indicatorDecloracion2;
            $decloracion->indicator3 = $request->indicatorDecloracion3;
            $decloracion->dblCatPlant = $obj->dblCatPlant;
            // $decloracion->save();

            //Process Filtracion
            $oldFiltracion = Filtracion::where('dblCatPlant', $obj->dblCatPlant)->delete();
            $filtracion = new Filtracion();
            $filtracion->indicator1 = $request->indicatorFiltracion1;
            $filtracion->indicator2 = $request->indicatorFiltracion2;
            $filtracion->indicator3 = $request->indicatorFiltracion3;
            $filtracion->indicator4 = $request->indicatorFiltracion4;
            $filtracion->dblCatPlant = $obj->dblCatPlant;
            // $filtracion->save();

            //Process Osmosis
            $oldOsmosis = Osmosis::where('dblCatPlant', $obj->dblCatPlant)->delete();
            $osmosis = new Osmosis();
            $osmosis->indicator1 = $request->indicatorOsmosis1;
            $osmosis->indicator2 = $request->indicatorOsmosis2;
            $osmosis->indicator3 = $request->indicatorOsmosis3;
            $osmosis->indicator4 = $request->indicatorOsmosis4;
            $osmosis->dblCatPlant = $obj->dblCatPlant;
            // $osmosis->save();

            //Process Desinfeccion
            // $oldDesinfeccion = Desinfeccion::where('dblCatPlant', $obj->dblCatPlant)->delete();
            $desinfeccion = new Desinfeccion();
            $desinfeccion->indicator1 = $request->indicatorDesinfeccion1;
            $desinfeccion->indicator2 = $request->indicatorDesinfeccion2;
            $desinfeccion->intUser = Auth::user()->id;
            // $desinfeccion->indicator3 = $request->indicatorDesinfeccion3;
            // $desinfeccion->indicator4 = $request->indicatorDesinfeccion4;
            // $desinfeccion->indicator5 = $request->indicatorDesinfeccion5;
            // $desinfeccion->indicator6 = $request->indicatorDesinfeccion6;
            // $desinfeccion->indicator7 = $request->indicatorDesinfeccion7;
            $desinfeccion->dblCatPlant = $obj->dblCatPlant;
            // $desinfeccion->save();

            //Process incidence
            // $oldIncidences = Incidence::where('dblCatPlant', $obj->dblCatPlant)->delete();
            if ($request->capacidad != "" or $request->presion != "" or $request->problemasCalidad != "" or $obj->dblCatPlant != "") {
                $well = new Incidence();
                $well->indicator1 = $request->capacidad;
                $well->indicator2 = $request->presion;
                $well->indicator3 = $request->problemasCalidad;
                $well->indicator4 = $request->potabilizacion;
                $well->dblCatPlant = $obj->dblCatPlant;
                $well->save();
            }
        });
        $request->session()->flash('message', 'Registro actualizado!');
        return redirect()->route('plant.edit', $request->dblCatPlant);
    }

    public function destroy($dblCatTypeUser)
    {

    }
}
