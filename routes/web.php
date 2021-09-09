<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    return view('welcome');
});

Route::get('home', [HomeController::class,'index'])->name('home.index');

Route::get('registro',[UsuarioController::class,'form_registro'])->name('form_registro');

Route::post('registro',[UsuarioController::class,'registro'])->name('registro');

Route::get('inicio_sesion',[AuthController::class,'inicio_sesion'])->name('inicio_sesion');

Route::post('inicio_sesion',[AuthController::class,'iniciar'])->name('auth.store');

Route::get('usuario/{usuario}',[UsuarioController::class,'index'])->name("usuario.index");


