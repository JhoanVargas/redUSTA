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

        ]);

        User::create([
            'name' => $request->name,
            'lastname' => Str::slug($request->lastname),
            'email' => $request->email,
            'password' => Hash::make($request->pass) ,
        ]);

        auth()->attempt([
            'email' => $request->email,
            'password' => $request->pass,
        ]);

        return redirect()->route('sesion');

    }
}
