<?php

use App\Http\Controllers\UsuarioController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('usuarios', UsuarioController::class);
Route::resource('rols', RolController::class);
