<?php

namespace App\Http\Controllers\Plant\Catalogs;

use App\Http\Controllers\Controller;
use App\Models\Plant\Catalogs\CatPlant;
use Illuminate\Http\Request;

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
        return view('Plant.Catalogs.catPlant', compact('page_title', 'obj'));
    }

    public function update(Request $request)
    {
        request()->validate([
            'strName' => 'min:3|required',
        ]);
        $obj = CatPlant::findOrFail($request->dblCatPlant);
        $obj->strName = $request->strName;
        $obj->strAddress = $request->strAddress;
        $obj->intLongitude = $request->intLongitude;
        $obj->intLongitude = $request->intLongitude;
        $obj->save();
        $request->session()->flash('message', 'Registro actualizado!');
        return redirect()->route('plant.index');
    }

    public function destroy($dblCatTypeUser)
    {

    }
}
