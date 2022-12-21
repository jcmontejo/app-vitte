<?php

namespace App\Http\Controllers\User\Catalogs;

use App\Http\Controllers\Controller;
use App\Models\Plant\Catalogs\CatPlant;
use App\Models\TypeUser\Catalogs\CatTypeUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $page_title = 'Usuarios';
        $message = $request->session()->get('message');
        $objs = User::all();

        $params = [
            'page_title',
            'message',
            'objs',
            'request',
        ];
        return view('User.Catalogs.catUserCons', compact($params));
    }

    public function create(Request $request)
    {
        $page_title = 'Crear Usuario';
        $message = $request->session()->get('message');
        $obj = new User();
        $branchs = CatPlant::all();
        $type_users = CatTypeUser::all();
        return view('User.Catalogs.catUser', compact('page_title', 'obj', 'branchs', 'type_users'));
    }

    public function store(Request $request)
    {
        request()->validate([
            'name' => 'min:3|required',
            'email' => 'required|email',
        ]);
        // $psd = password_generator();
        $psd = 'Temporal.2022';
        $obj = new User();
        $obj->name = $request->input("name");
        $obj->strLastName = $request->input("strLastName");
        $obj->strAddress = $request->input("strAddress");
        $obj->intPhoneNumber = $request->input("intPhoneNumber");
        $obj->email = $request->input("email");
        $obj->dblCatTypeUser = $request->dblCatTypeUser;
        $obj->dblCatPlant = $request->dblCatPlant;
        $obj->password = Hash::make($psd);
        $obj->strPasswordText = $psd;
        $obj->save();

        $request->session()->flash('message', 'El registro ha sido guardado!');

        return redirect()->route('user.index');
    }

    public function edit(Request $request, $id)
    {
        $page_title = 'Editar Usuario';
        $method = $request->method();
        $obj = User::findOrFail($id);
        $branchs = CatPlant::all();
        $type_users = CatTypeUser::all();
        return view('User.Catalogs.catUser', compact('page_title', 'obj', 'branchs', 'type_users'));
    }

    public function update(Request $request)
    {
        request()->validate([
            'name' => 'min:3|required',
            'email' => 'required|email',
        ]);
        $intUserType = $request->input("id");
        $obj = User::findOrFail($intUserType);
        $obj->name = $request->input("name");
        $obj->strLastName = $request->input("strLastName");
        $obj->strAddress = $request->input("strAddress");
        $obj->intPhoneNumber = $request->input("intPhoneNumber");
        $obj->email = $request->input("email");
        $obj->dblCatTypeUser = $request->dblCatTypeUser;
        $obj->dblCatPlant = $request->dblCatPlant;
        $obj->save();
        $request->session()->flash('message', 'Registro actualizado!');
        return redirect()->route('user.index');
    }

    public function destroy($id)
    {
        $obj = User::findOrFail($id)->delete();
        return response()->json('success');
    }
}
