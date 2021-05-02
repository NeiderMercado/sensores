<?php

use Illuminate\Support\Facades\Route;

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




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/sensores/index', function () {
    return view('sensores/index');
})->name('sensores/index');


Route::get('/sensores', function () {
    return view('/sensores/inicio');
});

Route::get('/sensores', function () {
    return view('/sensores/inicio');
});



Route::get('/sensores/create','\App\Http\Controllers\EmpleadosController@create');
Route::get('/sensores/create/inicio','\App\Http\Controllers\EmpleadosController@create');


Route::get('/sensores/{id}/edit','\App\Http\Controllers\EmpleadosController@edit');
Route::get('/sensores/edit','\App\Http\Controllers\EmpleadosController@edit');
Route::post('/sensores','\App\Http\Controllers\EmpleadosController@store');
Route::post('/gestion_humana/nuevo_conductor','\App\Http\Controllers\EmpleadosController@store');
Route::get('/sensores/INTERNO_CONSULTAR','\App\Http\Controllers\EmpleadosController@index');
Route::get('/sensores/LIQUIDACION_VEH','\App\Http\Controllers\EmpleadosController@CONSULTAR_DESPACHOS');
Route::get('/sensores/CARGA_TIMBRADAS','\App\Http\Controllers\EmpleadosController@SUMAR_INGRESOS');



Route::get('/sensores/inicio','\App\Http\Controllers\EmpleadosController@consulta');
Route::get('gestion_humana/operativo','\App\Http\Controllers\EmpleadosController@operacion');
Route::get('gestion_humana/operativo_crear','\App\Http\Controllers\EmpleadosController@operacion3');
Route::get('gestion_humana/operativo_selint','\App\Http\Controllers\EmpleadosController@operacion2');
Route::get('gestion_humana/operativo_actualizar','\App\Http\Controllers\EmpleadosController@operacion4');
Route::get('gestion_humana/historial_conductor','\App\Http\Controllers\EmpleadosController@historial_conductor');
Route::get('gestion_humana/agregar_facturas','\App\Http\Controllers\EmpleadosController@historial_facturas');
Route::get('gestion_humana/agregar_documento','\App\Http\Controllers\EmpleadosController@nuevo_documento');
Route::get('gestion_humana/agregar_tarjeta_operacion','\App\Http\Controllers\EmpleadosController@nuevo_tar_operacion');
Route::get('gestion_humana/agregar_facturas','\App\Http\Controllers\EmpleadosController@fuct_mantenimeinto');
Route::get('gestion_humana/agregar_extra_y_contra','\App\Http\Controllers\EmpleadosController@nuevo_extra_contra');
Route::get('gestion_humana/visualizar_facturas','\App\Http\Controllers\EmpleadosController@facturas');





//Route::update('/sensores/update','\App\Http\Controllers\EmpleadosController@update');
Route::patch('/sensores/{id}/update','\App\Http\Controllers\EmpleadosController@update');
Route::patch('/sensores/{id}/update','\App\Http\Controllers\EmpleadosController@add_documento');

Route::patch('/gestion_humana/{id}/update','\App\Http\Controllers\EmpleadosController@update');
Route::delete('/sensores/{id}','\App\Http\Controllers\EmpleadosController@destroy');