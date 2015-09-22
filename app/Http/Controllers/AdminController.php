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
		foreach ($inscritos as $inscrito) {			
			$inscrito->acoes = 	'<a href="viewInscrito/'.$inscrito->id.'"><i class="fa fa-2x fa-search"></i></a>'.
								'&nbsp;&nbsp;<a href="'.$inscrito->comprovante.'" alt="Comprovante de Pagamento"><i class="fa fa-2x fa-money"></i></a>'.
								'&nbsp;&nbsp;<a href="'.$inscrito->arquivo.'" alt="Arquivo Simpósio"><i class="fa fa-2x fa-file-pdf-o"></i></a>';
		}
		return view('admin.simposio.index', compact('inscritos'));
	}

	/**
	* Exibe Inscrito isoladamente
	*
	* @return Response
	*/
	public function viewInscrito($idInscrito)
	{
		$inscrito = Simposio::findOrFail($idInscrito);
		return view('admin.simposio.view_inscrito', compact('inscrito'));
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
