<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;

class SecureurlController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(User $user)
    {
        $posts = Post::where("user_id",$user->id)->get();
    
        return view('dashboard',[
            'user' => $user,
            'posts' => $posts
        ]);
    }
    public function create(){
        //dd('Creando nueva publicación');
        return view('publicaciones.create');
    }
    public function store(Request $request){
        //return dd('Creando Publicación');
        $this->validate($request,[
            'titulo'=>'required',
            'descripcion'=>'required',
            'imagen'=>'required',
        ]);

        Post::create([
            'titulo'=>$request->titulo,
            'descripcion'=>$request->descripcion,
            'imagen'=>$request->imagen,
            'user_id'=>auth()->user()->id
        ]);
        return redirect()->route('dash',['user'=>auth()->user()->name]);
    }
}
