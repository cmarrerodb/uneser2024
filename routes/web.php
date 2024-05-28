<?php

use App\Http\Controllers\PermissionsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TrabajadorController;
use App\Http\Controllers\AuxiliarController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\MovilizacionController;
use App\Http\Controllers\GraficosController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();
// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'index'])->name('home');
Auth::routes();
Route::get('/', function() {
// Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
Route::middleware(['auth'])->group(function () {
    Route::resource('trabajadores', TrabajadorController::class)->names('admin.workers');
    Route::get('/trab_tabla',[TrabajadorController::class,'trab_tabla'])->name('trab_tabla');
    Route::get('/seguimiento',[TrabajadorController::class,'seguimiento'])->name('workers.following');
    Route::get('/trab_seguimiento',[TrabajadorController::class,'trab_seguimiento'])->name('trab_seguimiento');
    Route::resource('roles', RolesController::class)->names('admin.roles');
    Route::get('roles/{id}/assign', [RolesController::class, 'assign'])->name('admin.roles.assign');
    Route::post('rol2user', [RolesController::class, 'rol2user'])->name('admin.roles.rol2user');
    Route::resource('permisos', PermissionsController::class)->names('admin.permissions');
    Route::get('roles/{id}/search', [RolesController::class, 'search'])->name('admin.roles.search');    
    Route::post('permisos/search', [PermissionsController::class, 'search'])->name('admin.permissions.search');    
    Route::post('trabajador/check', [TrabajadorController::class, 'check'])->name('workers.check');
    Route::post('trabajador/obtener_trabajador', [TrabajadorController::class, 'obtener_trabajador'])->name('workers.get.worker');
    Route::post('trabajador/auxiliares', [AuxiliarController::class, 'auxiliares'])->name('auxiliars.main.workers');
    Route::post('trabajador/estado_municipios', [AuxiliarController::class, 'estado_municipios'])->name('auxiliars.states.municipality');
    Route::post('trabajador/municipio_parroquias', [AuxiliarController::class, 'municipio_parroquias'])->name('auxiliars.municipality.parish');
    Route::post('trabajador/actualizar_trabajador', [TrabajadorController::class, 'actualizar_trabajador'])->name('workers.update.worker');
    Route::get('estadisticas_movilizacion', [MovilizacionController::class, 'index'])->name('statistic.movilization');

    Route::get('/movilizacion_hora',[MovilizacionController::class,'movilizacion_hora'])->name('movilizacion_hora');
    Route::get('movilizacion_nucleo',[MovilizacionController::class,'movilizacion_nucleo'])->name('movilizacion_nucleo');
    Route::get('movilizacion_estado',[MovilizacionController::class,'movilizacion_estado'])->name('movilizacion_estado');
    Route::get('movilizacion_tipo',[MovilizacionController::class,'movilizacion_tipo'])->name('movilizacion_tipo');
    Route::get('movilizacion_tipo_tra',[MovilizacionController::class,'movilizacion_tipo_tra'])->name('movilizacion_tipo_tra');
    Route::get('movilizacion_nucleo_tipo',[MovilizacionController::class,'movilizacion_nucleo_tipo'])->name('movilizacion_nucleo_tipo');
    Route::get('movilizacion_nucleo_tipo_tra',[MovilizacionController::class,'movilizacion_nucleo_tipo_tra'])->name('movilizacion_nucleo_tipo_tra');
    Route::get('movilizacion_hora_tra',[MovilizacionController::class,'movilizacion_hora_tra'])->name('movilizacion_hora_tra');
    Route::get('movilizacion_hora_est',[MovilizacionController::class,'movilizacion_hora_est'])->name('movilizacion_hora_est');
    Route::get('movilizacion_nucleo_tra',[MovilizacionController::class,'movilizacion_nucleo_tra'])->name('movilizacion_nucleo_tra');
    Route::get('movilizacion_nucleo_est',[MovilizacionController::class,'movilizacion_nucleo_est'])->name('movilizacion_nucleo_est');
    Route::get('movilizacion_estado_tra',[MovilizacionController::class,'movilizacion_estado_tra'])->name('movilizacion_estado_tra');
    Route::get('movilizacion_estado_est',[MovilizacionController::class,'movilizacion_estado_est'])->name('movilizacion_estado_est');
    Route::get('movilizacion_tipo_estado',[MovilizacionController::class,'movilizacion_tipo_estado'])->name('movilizacion_tipo_estado');
    Route::get('movilizacion_tipo_estado_tra',[MovilizacionController::class,'movilizacion_tipo_estado_tra'])->name('movilizacion_tipo_estado_tra');
    
    Route::get('graficos_movilizacion', [GraficosController::class, 'index'])->name('graph.movilization');
    Route::get('/grafico_hora',[GraficosController::class,'grafico_hora'])->name('grafico_hora');
    
    Route::get('/elect_gen_mov',[HomeController::class,'elect_gen_mov'])->name('elect_gen_mov');
    Route::get('/elect_gen_tra',[HomeController::class,'elect_gen_tra'])->name('elect_gen_tra');
    // Route::get('grafico_nucleo',[GraficoController::class,'grafico_nucleo'])->name('grafico_nucleo');
    // Route::get('grafico_estado',[GraficoController::class,'grafico_estado'])->name('grafico_estado');
    // Route::get('grafico_tipo',[GraficoController::class,'grafico_tipo'])->name('grafico_tipo');
    // Route::get('grafico_tipo_tra',[GraficoController::class,'grafico_tipo_tra'])->name('grafico_tipo_tra');
    // Route::get('grafico_nucleo_tipo',[GraficoController::class,'grafico_nucleo_tipo'])->name('grafico_nucleo_tipo');
    // Route::get('grafico_nucleo_tipo_tra',[GraficoController::class,'grafico_nucleo_tipo_tra'])->name('grafico_nucleo_tipo_tra');
    // Route::get('grafico_hora_tra',[GraficoController::class,'grafico_hora_tra'])->name('grafico_hora_tra');
    // Route::get('grafico_hora_est',[GraficoController::class,'grafico_hora_est'])->name('grafico_hora_est');
    // Route::get('grafico_nucleo_tra',[GraficoController::class,'grafico_nucleo_tra'])->name('grafico_nucleo_tra');
    // Route::get('grafico_nucleo_est',[GraficoController::class,'grafico_nucleo_est'])->name('grafico_nucleo_est');
    // Route::get('grafico_estado_tra',[GraficoController::class,'grafico_estado_tra'])->name('grafico_estado_tra');
    // Route::get('grafico_estado_est',[GraficoController::class,'grafico_estado_est'])->name('grafico_estado_est');
    // Route::get('grafico_tipo_estado',[GraficoController::class,'grafico_tipo_estado'])->name('grafico_tipo_estado');
    // Route::get('grafico_tipo_estado_tra',[GraficoController::class,'grafico_tipo_estado_tra'])->name('grafico_tipo_estado_tra');
    // Route::get('permisos/search', [PermissionsController::class, 'search'])->name('admin.permissions.search');    
    // Route::resource('trabajadores', TrabajadorController::class)->middleware('can:admin.workers.index')->names('admin.workers');
});
