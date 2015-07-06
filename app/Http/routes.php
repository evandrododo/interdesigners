<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'MenuController@index');
Route::get('inscricoes', 'InscricoesController@index');
Route::get('simposio', 'SimposioController@index');
Route::get('evento', 'EventoController@index');
Route::get('programacao', 'ProgramacaoController@index');

Route::controller('admin', 'AdminController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController'
]);
