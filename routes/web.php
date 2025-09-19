<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

// rutas de login/register/logout
Auth::routes();

// ruta de inicio (después de login)
Route::get('/home', [HomeController::class, 'index'])->name('home');

// CRUD de usuarios
Route::resource('usuarios', UsuarioController::class);
