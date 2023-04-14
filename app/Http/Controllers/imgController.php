<?php
namespace App\Http\Controllers;


use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Intervention\Image\ImageManager;
use Illuminate\Http\Request;

class imgController extends Controller
{
    public function store(Request $request){
        $imagen = $request -> file('file');
        $nombreImagen = Str::uuid().".".$imagen->extension();
        $imagenServidor = Image::make($imagen);
        $imagenServidor->fit(500,500);
        $imagen_path = public_path('uploads').'/'.$nombreImagen;
        $imagenServidor->save($imagen_path);
        return response()->json(['imagen' => $nombreImagen]);
    }
}
