<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use LengthException;

class SecureurlController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(User $user)
    {
        $posts = Post::where("user_id",$user->id)->paginate(3);

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
    public function show(Request $request,User $user,Post $post){
        $comentarios = $post->comentario;
        $likes = $post->like;
        return view('publicaciones.show',[
            'post'=>$post,
            'user'=>$user,
            'comentarios'=>$comentarios,
            'likes'=>$likes->count(),
        ]);

    }

    public function destroy(Post $post){

        $this->authorize('delete',$post);
        $post->delete();
        return redirect()->route('dash',['user'=>auth()->user()->name]);

    }
}
