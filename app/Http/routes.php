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
Route::get('lorenzatractor', function()
{
      return File::get(public_path() . '/lorenz/NeoBrush-P5js/index.html');
});

Route::get('2013', function()
{
      return File::get(public_path() . '/2013/index.html');
});
Route::get('/', 'MenuController@index');
Route::get('inscricoes', 'InscricoesController@index');
Route::get('simposio', 'SimposioController@index');
Route::get('evento', 'EventoController@index');
Route::get('programacao', 'ProgramacaoController@index');

Route::get('admin/convidados', 'ConvidadosController@index');

Route::resource('convidado','ConvidadosController');
Route::resource('inscricao','SimposioInscricaoController');

Route::controller('admin', 'AdminController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController'
]);
