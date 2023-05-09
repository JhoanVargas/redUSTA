<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comentario;
use App\Models\User;
use App\Models\Post;

class comentarioController extends Controller
{
    public function store(Request $request,User $user,Post $post){
        $this->validate($request,[
            'texto'=>'required',
        ]);
        Comentario::create([
            'texto'=>$request->texto,
            'user_id'=>auth()->user()->id,
            'post_id'=>$request->post_id,
            
        ]);
        return redirect()->back();
    }

    public function destroy($id)
{
    $registro = Comentario::find($id);
    $registro->delete();
    return redirect()->back()->with('success', 'Registro eliminado exitosamente');
}


}
