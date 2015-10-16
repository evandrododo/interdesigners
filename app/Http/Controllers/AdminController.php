<?php namespace App\Http\Controllers;
use App\Simposio;
use App\User;
use App\Inscricoes;
use App\InscricoesGeraisSimposio;

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
								'&nbsp;&nbsp;<a href="'.$inscrito->comprovante.'" alt="Comprovante de Pagamento" target="_blank"><i class="fa fa-2x fa-money"></i></a>'.
								'&nbsp;&nbsp;<a href="'.$inscrito->arquivo.'" alt="Arquivo Simpósio" target="_blank"><i class="fa fa-2x fa-file-pdf-o"></i></a>';
		}
		return view('admin.simposio.index', compact('inscritos'));
	}

	public function getInscritoGeral()
	{
		$inscritos = Inscricoes::all();
		foreach ($inscritos as $inscrito) {			
			$inscrito->acoes = 	'<a href="viewInscritoGeral/'.$inscrito->id.'"><i class="fa fa-2x fa-search"></i></a>'.
								'&nbsp;&nbsp;<a href="'.$inscrito->comprovante.'" alt="Comprovante de Pagamento" target="_blank"><i class="fa fa-2x fa-money"></i></a>';
								
		}
		return view('admin.evento.index', compact('inscritos'));
	}

	public function getInscritoSimposioGeral()
	{
		$inscritos = InscricoesGeraisSimposio::all();
		foreach ($inscritos as $inscrito) {			
			$inscrito->acoes = 	'<a href="viewInscritoSimposioGeral/'.$inscrito->id.'"><i class="fa fa-2x fa-search"></i></a>'.
								'&nbsp;&nbsp;<a href="'.$inscrito->comprovante.'" alt="Comprovante de Pagamento" target="_blank"><i class="fa fa-2x fa-money"></i></a>';
								
		}
		return view('admin.simposio.geral.index', compact('inscritos'));
	}

	/**
	* Exibe Inscrito isoladamente
	*
	* @return Response
	*/
	public function viewInscrito($idInscrito)
	{
		$inscrito = Simposio::findOrFail($idInscrito);
		

		if ($inscrito->autor2 != null) 
			$inscrito->autor2 = ', ' . $inscrito->autor2;
		if ($inscrito->autor3 != null) 
			$inscrito->autor3 = ', ' . $inscrito->autor3;
		if ($inscrito->autor4 != null) 
			$inscrito->autor4 = ', ' . $inscrito->autor4;
		if ($inscrito->autor5 != null) 
			$inscrito->autor5 = ', ' . $inscrito->autor5;
		if ($inscrito->autor6 != null) 
			$inscrito->autor6 = ', ' . $inscrito->autor6;
		
		$inscrito->json_avaliacao = json_decode($inscrito->json_avaliacao);
		foreach ($inscrito->json_avaliacao as $key => $value) {
			$value->professor = User::find($value->professor)->name;
		}

		return view('admin.simposio.view_inscrito', compact('inscrito'));
	}

	public function viewInscritoGeral($idInscrito)
	{
		$inscrito = Inscricoes::findOrFail($idInscrito);
		
		return view('admin.evento.view_inscrito', compact('inscrito'));
	}

	public function viewInscritoSimposioGeral($idInscrito)
	{
		$inscrito = InscricoesGeraisSimposio::findOrFail($idInscrito);
		
		return view('admin.simposio.geral.view_inscrito', compact('inscrito'));
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
