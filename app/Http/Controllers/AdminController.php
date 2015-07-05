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
	public function index()
	{
		return view('admin.index');
	}

}
