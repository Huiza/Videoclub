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
Route::get('/peliculas', 'PeliculaController@index')->name('peliculas');
Route::get('/peliculas/crear','PeliculaController@create')->name('crear_pelicula');
Route::post('/peliculas/guardar','PeliculaController@store')->name('guardar_pelicula');
