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

//Rutas para la creación, edición de peliculas
Route::get('/peliculas', 'PeliculaController@index')->name('peliculas');
Route::get('/peliculas/crear','PeliculaController@create')->name('crear_pelicula');
Route::post('/peliculas/guardar','PeliculaController@store')->name('guardar_pelicula');
Route::get('/peliculas/editar/{id}', 'PeliculaController@edit')->name('editar_pelicula');

Route::put('/peliculas/actualizar/{id}', 'PeliculaController@update')->name('actualizar_pelicula');
