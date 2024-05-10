<?php

use App\Http\Controllers\PermissionsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrabajadorController;
use App\Http\Controllers\AuxiliarController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\MovilizacionController;


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
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();
Route::get('/home', function() {
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
    // Route::get('permisos/search', [PermissionsController::class, 'search'])->name('admin.permissions.search');    
    // Route::resource('trabajadores', TrabajadorController::class)->middleware('can:admin.workers.index')->names('admin.workers');
});
