<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ControlesController;
use App\Http\Controllers\EtiquetaController;
use App\Http\Controllers\MiCuentaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImagenesController;
use App\Http\Controllers\UsuarioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'mi-cuenta/etiqueta', 'middleware' => ['auth']], function () {
    Route::get('', [EtiquetaController::class, 'index'])->name('etiqueta');
    Route::get('/leer', [EtiquetaController::class, 'leer'])->name('etiqueta.leer');
    Route::get('/leerC', [EtiquetaController::class, 'leerC'])->name('etiqueta.leerC');
    Route::get('/listar', [EtiquetaController::class, 'listar'])->name('etiqueta.listar');
    Route::get('/elegir', [EtiquetaController::class, 'elegir'])->name('etiqueta.elegir');
    Route::get('/reponer', [EtiquetaController::class, 'reponer'])->name('etiqueta.reponer');
    Route::post('/crear', [EtiquetaController::class, 'crear'])->name('etiqueta.crear');
    Route::post('/recrear', [EtiquetaController::class, 'recrear'])->name('etiqueta.recrear');
    Route::post('/enviar', [EtiquetaController::class, 'enviar'])->name('etiqueta.enviar');
    Route::get('/{id}/editar', [EtiquetaController::class, 'editar'])->name('etiqueta.editar');
    Route::post('', [EtiquetaController::class, 'guardar'])->name('etiqueta.guardar');
    Route::post('/guardar-orden', [EtiquetaController::class, 'guardarOrden'])->name('etiqueta.orden');
    Route::put('/{id}', [EtiquetaController::class, 'actualizar'])->name('etiqueta.actualizar');
    Route::delete('/{id}/eliminar', [EtiquetaController::class, 'eliminar'])->name('etiqueta.eliminar');
});

Route::group(['prefix' => 'mi-cuenta/control', 'middleware' => ['auth']], function () {

    Route::post('/observar', [ControlesController::class, 'observar'])->name('control.observar');
    Route::post('/crear', [ControlesController::class, 'crear'])->name('control.crear');
    Route::post('/guardar', [ControlesController::class, 'guardar'])->name('control.guardar');
    Route::get('/listar', [ControlesController::class, 'listar'])->name('control.listar');
    Route::get('/seleccionar', [ControlesController::class, 'seleccionar'])->name('control.seleccionar');



    });


Route::get('/mi-cuenta', [MiCuentaController::class, 'index'])->middleware('auth')->name('mi-cuenta');

Route::get('/mi-cuenta/dashboard', [AdminController::class, 'index'])->middleware('auth')->name('mi-cuenta');



/*Route::group(['prefix' => 'admin-backend', 'middleware' => ['auth','superadministrador' ]], function
(){
    Route::get('menu', [MenuController::class, 'index'])->name('menu');
    Route::get('menu/crear', [MenuController::class, 'crear'])->name('menu.crear');
    Route::get('menu/{id}/editar', [MenuController::class, 'editar'])->name('menu.editar');
    Route::post('menu', [MenuController::class, 'guardar'])->name('menu.guardar');
    Route::post('menu/guardar-orden', [MenuController::class, 'guardarOrden'])->name('menu.orden');
    Route::put('menu/{id}', [MenuController::class, 'actualizar'])->name('menu.actualizar');
    Route::delete('menu/{id}/eliminar', [MenuController::class, 'eliminar'])->name('menu.eliminar');






});*/

Route::get('/home', function () {
    dd(\Illuminate\Support\Facades\Auth::user());
});




Route::resource('/mi-cuenta/files', ImagenesController::class)->names('admin.files');



Route::group(['prefix' => 'mi-cuenta', 'middleware' => ['auth']], function () {
    Route::get('usuario/registrar', [AdminController::class, 'crear'])->name('admin.crear');
    Route::get('usuario/listar', [AdminController::class, 'listar'])->name('admin.listar');
    Route::post('usuario', [AdminController::class, 'guardar'])->name('admin.guardar');
    Route::put('usuario/{id}/editar', [AdminController::class, 'editar'])->name('admin.editar');
    Route::delete('usuario/{id}/eliminar', [AdminController::class, 'eliminar'])->name('admin.eliminar');
});
