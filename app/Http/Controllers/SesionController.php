<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SesionController extends Controller
{    
    public function index(){
        return view('sesion');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'email' => 'required|email|max:50',
            'password' => 'required|min:6|max:50'
        ]);
        if (!auth()->attempt($request->only('email','password'))){
            return back()->with('mensaje','Usuario o contraseña incorrecta');

        }
        return redirect()->route('dash');
    }
}
