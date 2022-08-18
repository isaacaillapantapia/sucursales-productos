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

Route::get('/', 'App\Http\Controllers\SucursalesController@index');

Route::resource('/sucursales', 'App\Http\Controllers\SucursalesController');
//Route::resource('/productos', 'App\Http\Controllers\ProductosController');


Route::get('/productos/{id}','App\Http\Controllers\ProductosController@index');//listamos los productos de una sucursal
Route::get('/Eliminarproductos/{id}','App\Http\Controllers\ProductosController@delete');
Route::get('/producto/{id}','App\Http\Controllers\ProductosController@show');//listar los datos de un producto
Route::post('/updateProducto','App\Http\Controllers\ProductosController@update' );

//Recuperar imagen desde storage
Route::get('miniatura/{filename}','App\Http\Controllers\SucursalesController@getImagen')->name('getImagen');

//Routa Buscar
Route::get('/buscar/{search?}', 'App\Http\Controllers\ProductosController@search')->name('buscar');