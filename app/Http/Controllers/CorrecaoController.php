<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Simposio;
use App\Http\Requests\EditarConvidadoRequest;
use Illuminate\Auth\Guard;
use Input;

use Illuminate\Http\Request;

class CorrecaoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$inscritos = Simposio::all();
		foreach ($inscritos as $inscrito) {
			
			$inscrito->acoes = '<a href="viewPaper/'.$inscrito->id.'"><i class="fa fa-2x fa-pencil-square-o"></i></a>';
		}
		
		return view('admin.correcao.index', compact('inscritos'));
	}

	public function viewPaper($idInscrito)
	{
		$inscrito = Simposio::findOrFail($idInscrito);
		return view('admin.correcao.view_paper', compact('inscrito'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

		return view('admin.correcao.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$inscritos = new Simposio;

        $inscritos->nome = $request->nome;
        $inscritos->descricao = $request->descricao;

		$file = Input::file('foto');
		if ($file) {
			$destinationPath = public_path() . '/uploads/';
			$filename = $file->getClientOriginalName();
			$upload_success = $file->move($destinationPath, $filename);

			if ($upload_success) {
				$inscritos->foto = '/uploads/' . $filename;
			}
		}
        $inscritos->save();

		return redirect('admin/correcao');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$inscritos = Simposio::findOrFail($id);

		return view('admin.correcao.edit', compact('inscritos'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$inscritos = Simposio::findOrFail($id);

        $inscritos->decimal_nota = $this->calculaNotaMedia($inscritos, $request);
        $inscritos->json_avaliacao = $this->insereAvaliacaoEmJson($inscritos, $request);
      
		$inscritos->save();

		return redirect('admin/correcao');
	}


	/**
	 * Calcula Média do aluno de acordo com a avaliação
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function calculaNotaMedia($inscritos, $request)
	{	
		$i = 0;
		$sum = 0;
		if ($inscritos->json_avaliacao == NULL){
			return floatval($request->nota.'.'.$request->nota_dec);
		} else {
			$avaliacoes = json_decode($inscritos->json_avaliacao);
			foreach ($avaliacoes as $key => $avaliacao) {
				$i++;
				$sum += $avaliacao->nota;
			}
			return ($sum + floatval($request->nota.'.'.$request->nota_dec))/($i + 1);
		}
	}

	/**
	 * Insere no json os dados da Avaliação
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function insereAvaliacaoEmJson($inscritos, $request)
	{	
		$json = array();
		$json['professor'] = \Auth::user()->id;
		$json['nota'] = floatval($request->nota.'.'.$request->nota_dec);
		$json['observacao_titulo'] = $request->observacao_titulo;
		$json['observacao_abstract'] = $request->observacao_abstract;
		$json['observacao_introducao'] = $request->observacao_introducao;
		$json['observacao_revisaoteorica'] = $request->observacao_revisaoteorica;
		$json['observacao_metodo'] = $request->observacao_metodo;
		$json['observacao_resultados'] = $request->observacao_resultados;
		$json['observacao_contribuicao'] = $request->observacao_contribuicao;
		$json['observacao_bibliografia'] = $request->observacao_bibliografia;
		$json['observacao_redacao'] = $request->observacao_redacao;
		if ($inscritos->json_avaliacao == NULL){
			$avaliacoes = array();
			array_push($avaliacoes, $json);
			return json_encode($avaliacoes);
		} else {
			$avaliacoes = json_decode($inscritos->json_avaliacao);
			array_push($avaliacoes, $json);
			return json_encode($avaliacoes);
		}
	}
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
