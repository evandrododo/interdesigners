<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\InscricoesGeraisSimposio;
use Input;

use Illuminate\Http\Request;

class SimposioInscricaoGeralController extends Controller {

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
		$inscricao = new InscricoesGeraisSimposio;
        $inscricao->nome = $request->nome;
        $inscricao->rg = $request->rg;
        $inscricao->cpf = $request->cpf;
        $inscricao->dob = $request->dob;
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
        if ($request->artigo == '1' || $request->artigo == 1)
        	$inscricao->artigo = true;
        else
        	$inscricao->artigo = false;
        $inscricao->tituloartigo = $request->tituloartigo;

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
