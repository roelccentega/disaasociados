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

Route::get('/', 'InicioController@index');
Route::get('/nosotros', 'InicioController@nosotros');
Route::get('/contacto', 'InicioController@contact');


Route::get('/servicios/asesoria-contable', 'ServiciosController@contable');
Route::get('/servicios/asesoria-legal', 'ServiciosController@legal');

Route::get('/servicios/asesoria-contable/outsourcing-tributario', 'ServiciosController@oTributario');
Route::get('/servicios/asesoria-contable/outsourcing-de-nominas', 'ServiciosController@oNominas');
Route::get('/servicios/asesoria-contable/outsourcing-contable', 'ServiciosController@oContable');



