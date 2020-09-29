<?php

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
    return view('contenido/contenido');
});

/*Categorias*/

Route::get('/categoria', 'CategoriaController@index');
Route::post('/categoria/registrar', 'CategoriaController@store');
Route::put('/categoria/actualizar', 'CategoriaController@update');
Route::put('/categoria/desactivar', 'CategoriaController@desactivar');
Route::put('/categoria/activar', 'CategoriaController@activar');
Route::get('/categoria/selectCategorias', 'CategoriaController@selectCategoria');

/*Articulos*/

Route::get('/articulos', 'ArticuloController@index');
Route::post('/articulos/registrar', 'ArticuloController@store');
Route::put('/articulos/actualizar', 'ArticuloController@update');
Route::put('/articulos/desactivar', 'ArticuloController@desactivar');
Route::put('/articulos/activar', 'ArticuloController@activar');