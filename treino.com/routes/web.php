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

Route::get('/', [
  'as'    => 'home',
  'uses'  => 'HomeController@index'
]);
Route::get('escuela', [
  'as'    => 'escuela.principal',
  'uses'  => 'EscuelaController@index'
]);
Route::get('cursos', [
  'as'    => 'cursos.principal',
  'uses'  => 'CursosController@index'
]);
Route::get('contacto', [
  'as'    => 'contacto.principal',
  'uses'  => 'ContactoController@index'
]);
