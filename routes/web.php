<?php

use App\Http\Controllers\comentarioController;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\SecureurlController;
use App\Http\Controllers\SesionController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\imgController;
use App\Http\Controllers\LikeController;
use Illuminate\Support\Facades\Route;
use App\Models\User;




Route::get('/', function () {
    return view('welcome');
});

Route::get('/layout', function () {
    return view('layaoutprincipal');
});

Route::get('/sesion',[SesionController::class,'index'])->name('sesion');
Route::post('/sesion',[SesionController::class,'store'])->name('sesion');
Route::get('/registro',[RegistroController::class,'index'])->name('registro');
Route::post('/registro',[RegistroController::class,"store"])->name('registro');
Route::get('/{user:name}',[SecureurlController::class,'index'])->name('dash');
Route::post('/logout',[LogoutController::class,'store'])->name('logout');
Route::get('/publicaciones/create',[SecureurlController::class,'create'])->name('publicaciones.create');
Route::post('/imgs',[imgController::class,'store'])->name('imagenes.store');
Route::post('/publicaciones',[SecureurlController::class,'store'])->name('publicaciones.store');
Route::get('posts/{user:username}/{post}',[SecureurlController::class,'show'])->name('publicaciones.show');
Route::post('comentarios',[comentarioController::class,'store'])->name('comentarios.store');
Route::delete('/comentarios/{id}', [comentarioController::class,'destroy'])->name('comentarios.destroy');
Route::delete('/posts/{post}', [SecureurlController::class,'destroy'])->name('publicaciones.destroy');
Route::post('like',[LikeController::class,'store'])->name('like.store');
Route::get('/feed/{user:name}',[FeedController::class,'index'])->name('users');

