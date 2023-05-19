<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class FeedController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(User $user){
        $registros = User::all();
        return view('users',[
            'user' => $user,
            'registros' => $registros,
        ]);
        //return view('users');
    }
}
