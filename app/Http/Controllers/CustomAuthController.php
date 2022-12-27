<?php

namespace App\Http\Controllers;

use App\Models\Asistencia;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class CustomAuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                ->withSuccess('Signed in');
        }

        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function registration()
    {
        return view('auth.registration');
    }

    public function customRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("dashboard")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function dashboard()
    {
        if (Auth::check()) {
            // ? filters
            $now = now();
            $from = $now->copy()->startOfWeek()->format('Y-m-d');
            $to = $now->copy()->endOfWeek()->format('Y-m-d');
            $asistencias = Asistencia::leftjoin('users as t2', 'tblAsistencia.intUser', 't2.id')
                ->leftjoin('tblCatPlant as t3', 't3.dblCatPlant', 't2.dblCatPlant')
                ->select(
                    'tblAsistencia.created_at',
                    't2.name',
                    't2.strLastName',
                    't3.strName'
                )
                ->whereBetween('tblAsistencia.created_at', [$from, $to])
                ->orderBy('tblAsistencia.created_at', 'DESC')->get();
            return view('dashboard', compact('asistencias'));
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function signOut()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
