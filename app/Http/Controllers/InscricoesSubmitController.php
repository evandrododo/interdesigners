<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Inscricoes;
use Input;

use Illuminate\Http\Request;

class InscricoesSubmitController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{

		$inscricao = new Inscricoes;
        $inscricao->nome = $request->nome;
        $inscricao->pacote = $request->pacote;
        $inscricao->rg = $request->rg;
        $inscricao->cpf = $request->cpf;
        $inscricao->dob = $request->dob;
        $inscricao->tiposanguineo = $request->tiposanguineo;
        if ($request->necessecidades_especiais == '1' || $request->necessecidades_especiais == 1)
        	$inscricao->necessecidades_especiais = true;
        else
        	$inscricao->necessecidades_especiais = false;
        $inscricao->necessecidades_especiais = $request->necessecidades_especiais;
        if ($request->medicacao_controlada == '1' || $request->medicacao_controlada == 1)
        	$inscricao->medicacao_controlada = true;
        else
        	$inscricao->medicacao_controlada = false;
        $inscricao->medicacao_controlada = $request->medicacao_controlada;
        if ($request->alergias == '1' || $request->alergias == 1)
        	$inscricao->alergias = true;
        else
        	$inscricao->alergias = false;
        $inscricao->alergias = $request->alergias;
        if ($request->restricoes_alimenticias == '1' || $request->restricoes_alimenticias == 1)
        	$inscricao->restricoes_alimenticias = true;
        else
        	$inscricao->restricoes_alimenticias = false;
        $inscricao->restricoes_alimenticias = $request->restricoes_alimenticias;
        $inscricao->email = $request->email;
        $inscricao->telefone = $request->telefone;
        $inscricao->facebook = $request->facebook;
        $inscricao->contatoemergencia = $request->contatoemergencia;
        $inscricao->telefoneemergencia = $request->telefoneemergencia;
        $inscricao->cidadeestado = $request->cidadestado;
        $inscricao->instituicao_de_origem = $request->instituicao_de_origem;
        $inscricao->curso = $request->curso;
        $inscricao->anotermo = $request->anotermo;
        $inscricao->outrocongresso = $request->outrocongresso;
        $inscricao->camiseta = $request->camiseta;
        if ($request->alimentacao == '1' || $request->alimentacao == 1)
        	$inscricao->alimentacao = true;
        else
        	$inscricao->alimentacao = false;
        $inscricao->alimentacao = $request->alimentacao;
        $inscricao->tipo_comida = $request->tipo_comida;
        $inscricao->tamanho_comida = $request->tamanho_comida;

		$file = Input::file('comprovante');
		if ($file) {
			$destinationPath = public_path() . '/uploads/';
			$filename = $file->getClientOriginalName();
			$upload_success = $file->move($destinationPath, $filename);

			if ($upload_success) {
				$inscricao->comprovante = '/uploads/' . $filename;
			}
		}
        $inscricao->save();

		return view('simposio/form_sucesso');
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
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
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
