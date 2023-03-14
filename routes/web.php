<?php

use App\Http\Controllers\RegistroController;
use App\Http\Controllers\SecureurlController;
use App\Http\Controllers\SesionController;
use App\Http\Controllers\LogoutController;
use Illuminate\Support\Facades\Route;




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
Route::get('/vistausuario',[SecureurlController::class,'index'])->name('dash');
Route::post('/logout',[LogoutController::class,'store'])->name('logout');