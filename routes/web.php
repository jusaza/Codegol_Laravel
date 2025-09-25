<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntrenamientoController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\MatriculaController;
use App\Http\Controllers\PagoController;
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

Route::view('/rendimiento', 'rendimiento.rendimiento');//loco
Route::view('/rendimientopag', 'rendimiento.rendimientopag');//locos

Route::view('/usuario/actregistro', 'usuario.actregristro');
Route::view('/usuario/registropag', 'usuario.registropag');
Route::view('/pagina_original', 'pagina_original');


//Controladores 

Route::resource('usuarios', UsuarioController::class);
Route::get('/usuario', [App\Http\Controllers\UsuarioController::class, 'index'])->name('usuariopag');

Route::resource('rols', RolController::class);

Route::resource('entrenamientos', EntrenamientoController::class);
Route::get('/entrenamientopag', [EntrenamientoController::class, 'index'])->name('entrenamientos.page');

Route::resource('inventarios', InventarioController::class);
Route::get('/inventariopag', [App\Http\Controllers\InventarioController::class, 'index'])->name('inventariopag');

Route::resource('matriculas1',MatriculaController::class);
Route::get('/matriculapag', [App\Http\Controllers\MatriculaController::class, 'pag'])->name('matriculapag');

Route::resource('rendimientos', RendimientoController::class);//locos3
Route::get('/rendimientopag', [App\Http\Controllers\RendimientoController::class, 'index'])->name('rendimientopag');//locos4

Route::resource('pago', PagoController::class);
Route::get('/pagos/pdf', [PagoController::class, 'reportePdf'])->name('pago.pdf');