<?php

namespace App\Http\Controllers\TypeUser\Catalogs;

use App\Http\Controllers\Controller;
use App\Models\TypeUser\Catalogs\CatTypeUser;
use Illuminate\Http\Request;

class TypeUserController extends Controller
{
    public function index(Request $request)
    {
        $page_title = 'Tipos de Usuario';
        $message = $request->session()->get('message');
        $objTypeUsers = CatTypeUser::all();

        $params = [
            'page_title',
            'message',
            'objTypeUsers',
            'request',
        ];
        return view('TypeUser.Catalogs.catTypeUserCons', compact($params));
    }

    public function create(Request $request)
    {
        $page_title = 'Create User Type';
        $message = $request->session()->get('message');
        $user_type = new CatTypeUser();
        return view('TypeUser.Catalogs.catTypeUser', compact('page_title', 'user_type'));
    }

    public function store(Request $request)
    {
        request()->validate([
            'strTypeUser' => 'min:3|required',
        ]);
        $user_type = new CatTypeUser();
        $user_type->strTypeUser = $request->input("strTypeUser");
        $user_type->save();

        $request->session()->flash('message', 'El registro ha sido guardado!');

        return redirect()->route('type_user.index');
    }

    public function edit(Request $request, $dblCatTypeUser)
    {
        $page_title = 'Edit User Type';
        $method = $request->method();
        $user_type = CatTypeUser::findOrFail($dblCatTypeUser);
        return view('TypeUser.Catalogs.catTypeUser', compact('page_title', 'user_type'));
    }

    public function update(Request $request)
    {
        request()->validate([
            'strTypeUser' => 'min:3|required',
        ]);
        $intUserType = $request->input("dblCatTypeUser");
        $user_type = CatTypeUser::findOrFail($intUserType);
        $user_type->strTypeUser = $request->input("strTypeUser");
        $user_type->save();
        $request->session()->flash('message', 'The record has been updated!');
        return redirect()->route('type_user.index');
    }

    public function destroy($dblCatTypeUser)
    {
        $user_type = CatTypeUser::findOrFail($dblCatTypeUser)->delete();
        return response()->json('success');
    }
}
