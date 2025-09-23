<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\MatriculaController;
use App\Http\Controllers\RendimientoController;

Route::get('/', function () {
    return view('index');
});

Route::view('/servicios', 'servicios');
Route::view('/nosotros', 'nosotros');
Route::view('/login', 'auth.login');

// Rutas para las subcarpetas
Route::view('/entrenamiento', 'entrenamiento.entrenamiento');
Route::view('/entrenamientopag', 'entrenamiento.entrenopag');

Route::view('/inventario', 'inventario.inventarios');
Route::view('/inventariopag', 'inventario.inventariopag');

Route::view('/matricula', 'matricula.matricula');
Route::view('/matriculapag', 'matricula.matriculapag');

Route::view('/pago', 'pago.pago');
Route::view('/pagoregistro', 'pago.pagopag');

Route::view('/rendimiento', 'rendimiento.rendimiento');
Route::view('/rendimientopag', 'rendimiento.rendimientopag');

Route::view('/usuario/actregistro', 'usuario.actregristro');
Route::view('/usuario/registropag', 'usuario.registropag');

Route::view('/pagina_original', 'pagina_original');


//Controladores 

Route::resource('usuarios', UsuarioController::class);
Route::resource('inventario', InventarioController::class);
Route::resource('matriculas1',MatriculaController::class);
Route::get('/matriculapag', [App\Http\Controllers\MatriculaController::class, 'pag'])->name('matriculapag');
Route::resource('rendimientos', RendimientoController::class);
