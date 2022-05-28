<?php

namespace App\Http\Controllers\Plant\Catalogs;

use App\Http\Controllers\Controller;
use App\Models\Plant\Catalogs\CatPlant;
use App\Models\Plant\Catalogs\Incidence;
use App\Models\Plant\Catalogs\WellPump;
use Illuminate\Http\Request;
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
        $obj = new CatPlant();
        return view('Plant.Catalogs.catPlant', compact('page_title', 'obj'));
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
        $trasheds = WellPump::onlyTrashed()->where('dblCatPlant', $obj->dblCatPlant)->get();
        $incidences = Incidence::where('dblCatPlant', $obj->dblCatPlant)->get();
        return view('Plant.Catalogs.catPlant', compact('page_title', 'obj', 'trasheds', 'incidences'));
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
            $obj->save();

            //Process well pump
            $oldWells = WellPump::where('dblCatPlant', $obj->dblCatPlant)->delete();
            $well = new WellPump();
            $well->indicator1 = $request->indicator1;
            $well->indicator2 = $request->indicator2;
            $well->indicator3 = $request->indicator3;
            $well->indicator4 = $request->indicator4;
            $well->dblCatPlant = $obj->dblCatPlant;
            $well->save();

            //Process incidence
            // $oldIncidences = Incidence::where('dblCatPlant', $obj->dblCatPlant)->delete();
            if ($request->capacidad != "" OR $request->presion != "" OR $request->problemasCalidad != "" OR $obj->dblCatPlant != "") {
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
