<?php namespace App\Http\Controllers;
use App\Simposio;

class AdminController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Admin Controller
	|--------------------------------------------------------------------------
	|
	| Controle e Administração geral do conteúdo do site.
	|
	*/

	/**
	 * Instancia com autenticação.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show app admin
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		return view('admin.index');
	}


	/**
	* Show app admin
	*
	* @return Response
	*/
	public function getHome()
	{
		return view('admin.index');
	}


	/**
	* Exibe edição da programação
	*
	* @return Response
	*/
	public function getProgramacao()
	{
		return view('admin.programacao.index');
	}

	/**
	* Exibe edição de inscrições
	*
	* @return Response
	*/
	public function getSimposio()
	{
		$inscritos = Simposio::all();
		
		return view('admin.simposio.index', compact('inscritos'));
	}

	/**
	 * Exibe edição de inscrições
	 *
	 * @return Response
	 */
	public function getEvento()
	{
		return view('admin.index');
	}

	/**
	* Exibe edição de inscrições
	*
	* @return Response
	*/
	public function getConfiguracoes()
	{
		return view('admin.index');
	}


}
