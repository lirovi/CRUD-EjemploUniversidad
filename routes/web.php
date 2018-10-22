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
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/redirect','SocialController@redirect');
Route::get('/callback','SocialController@callback');

Route::resource('aulas','DbWeb1\AulaController');
Route::resource('docentes','DbWeb1\DocenteController');
Route::resource('materias','DbWeb1\MateriaController');
Route::resource('ayudantes','DbWeb1\AyudanteController');
Route::resource('carreras','DbWeb1\CarreraController');
Route::resource('horarios','DbWeb1\HorarioController');
