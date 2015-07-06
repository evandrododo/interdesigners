<?php namespace App\Http\Controllers;

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
	 * Exibe edição de inscrições
	 *
	 * @return Response
	 */
	public function getInscricoes()
	{
		return view('admin.index');
	}

	/**
	* Exibe edição de inscrições
	*
	* @return Response
	*/
	public function getProgramacao()
	{
		return view('admin.index');
	}

	/**
	* Exibe edição de inscrições
	*
	* @return Response
	*/
	public function getSimposio()
	{
		return view('admin.index');
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
