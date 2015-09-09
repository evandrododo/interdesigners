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

//teste de interação
Route::get('lorenzatractor', function()
{
      return File::get(public_path() . '/lorenz/NeoBrush-P5js/index.html');
});

// Rota antiga funcionando?
Route::get('2013', function()
{
      return File::get(public_path() . '/2/index.html');
});

Route::get('/', 'MenuController@index');
Route::get('inscricoes', 'InscricoesController@index');
Route::get('simposio', 'SimposioController@index');
Route::get('evento', 'EventoController@index');
Route::get('programacao', 'ProgramacaoController@index');

Route::get('admin/convidados', ['uses' => 'ConvidadosController@index', 'middleware' => 'auth']);
Route::get('admin/correcao', ['uses' => 'CorrecaoController@index', 'middleware' => 'auth']);
Route::get('admin/viewPaper/{id}', ['uses' => 'CorrecaoController@viewPaper', 'middleware' => 'auth']);

Route::resource('convidado','ConvidadosController');
Route::resource('inscricao','SimposioInscricaoController');
Route::resource('submitInscricao','SimposioInscricaoGeralController');
Route::resource('submitInscricaoGeral','InscricoesSubmitController');


Route::controller('admin', 'AdminController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController'
]);
