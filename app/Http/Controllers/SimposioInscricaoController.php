<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Simposio;
use Input;

use Illuminate\Http\Request;

class SimposioInscricaoController extends Controller {

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
		$inscricao = new Simposio;

        $inscricao->nome = $request->nome;
        $inscricao->email = $request->email;
        $inscricao->cpf = $request->cpf;
        $inscricao->telefone = $request->telefone;
        $inscricao->instituicao_de_origem = $request->instituicao_de_origem;
        $inscricao->tematica = $request->tematica;
        $inscricao->autor1 = $request->autor1;
        $inscricao->autor2 = $request->autor2;
        $inscricao->autor3 = $request->autor3;
        $inscricao->autor4 = $request->autor4;
        $inscricao->autor5 = $request->autor5;
        $inscricao->resumo = $request->resumo;

		$file = Input::file('arquivo');
		if ($file) {
			$destinationPath = public_path() . '/uploads/';
			$filename = $file->getClientOriginalName();
			$upload_success = $file->move($destinationPath, $filename);

			if ($upload_success) {
				$inscricao->arquivo = '/uploads/' . $filename;
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
