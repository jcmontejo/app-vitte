<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Plant\Catalogs\CatPlant;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getPlantas(Request $request)
    {
        $plantas = CatPlant::all();
        return response()->json($plantas);
    }
}
