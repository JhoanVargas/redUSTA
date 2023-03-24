<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegistroController extends Controller
{
    public function index(){
        return view('registro');
    }
    public function store(Request $request){

        //dd($request);
        $validated = $request->validate([
            'name' => 'required|min:3',
            'lastname' => 'required|min:3',
            'email' => 'required|unique:users|email|max:50',
            'pass' => 'required|min:6|max:20',
            'username' => 'required|unique:users|min:3|max:30',
            'programa' => 'required|min:3',
            'semestre' => 'required|max:2',
            'celular' => 'required|min:10',
            'direccion' => 'min:3',
            'presentacion' => 'max:150',
            'genero' => 'min:3',

        ]);

        User::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => Hash::make($request->pass) ,
            'username' => Str::slug($request->username),
            'programa' => $request->programa,
            'semestre' => $request->semestre,
            'celular' => $request->celular,
            'direccion' => $request->direccion,
            'presentacion' => $request->presentacion,
            'genero' => $request->genero,
        ]);

        auth()->attempt([
            'email' => $request->email,
            'password' => $request->pass,
        ]);

        return redirect()->route('sesion');

    }
}
