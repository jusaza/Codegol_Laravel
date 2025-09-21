<?php

use App\Http\Controllers\UsuarioController;

use Illuminate\Support\Facades\Route;

//Index y Pagina Principal

Route::get('/', function () {
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/servicios', function () {
    return view('servicios');
});

Route::get('/pagina_original', function () {
    return view('pagina_original');
});

//Formularios

Route::get('/formularios/inicio_sesion', function () {
    return view('formularios.inicio_sesion');
});

Route::get('/formularios/entrenamiento', function () {
    return view('formularios.entrenamiento');
});

Route::get('/formularios/inventario', function () {
    return view('formularios.inventario');
});

Route::get('/formularios/matricula', function () {
    return view('formularios.matricula');
});

Route::get('/formularios/pago', function () {
    return view('formularios.pago');
});

Route::get('/formularios/rendimiento', function () {
    return view('formularios.rendimiento');
});

Route::get('/formularios/registrarse', function () {
    return view('formularios.registrarse');
});

//Formularios Actualizacion

Route::get('/formularios_acualizacion/entrenamiento_actualizar', function () {
    return view('formularios_actualizacion.entrenamiento_actualizar');
});

Route::get('/formularios_actualizacion/inventario_actualizar', function () {
    return view('formularios_actualizacion.inventario_actualizar');
});

Route::get('/formularios_actualizacion/matricula_actualizar', function () {
    return view('formularios_actualizacion.matricula_actualizar');
});

Route::get('/formularios_actualizacion/pago_actualizar', function () {
    return view('/formularios_actualizacion.pago_actualizar');
});

Route::get('/formularios_actualizacion/rendimiento_actualizar', function () {
    return view('/formularios_actualizacion.rendimiento_actualizar');
});

Route::get('/formularios_actualizacion/registrarse_actualizar', function () {
    return view('/formularios_actualizacion.registrarse_actualizar');
});

//Listas

Route::get('/entrenopag', function () {
    return view('entrenopag');
});

Route::get('/registropag', function () {
    return view('registropag');
});

Route::get('/inventariopag', function () {
    return view('inventariopag');
});

Route::get('/rendimientopag', function () {
    return view('rendimientopag');
});

Route::get('/matriculapag', function () {
    return view('matriculapag');
});

Route::get('/pagopag', function () {
    return view('pagopag');
});

?>