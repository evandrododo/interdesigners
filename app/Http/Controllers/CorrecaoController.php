<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Simposio;
use App\Http\Requests\EditarConvidadoRequest;
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
		// var_dump($inscritos);
		// die();
		foreach ($inscritos as $inscrito) {
			
			$inscrito->acoes = '<a href="viewPaper/'.$inscrito->id.'"><i class="fa fa-2x fa-pencil-square-o"></i></a>';
		}
		
		return view('admin.correcao.index', compact('inscritos'));
	}

	public function viewPaper($idInscrito)
	{
		$inscrito = Simposio::findOrFail($idInscrito);
		// var_dump($inscritos);
		// die();
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
		$convidado = new Convidado;

        $convidado->nome = $request->nome;
        $convidado->descricao = $request->descricao;

		$file = Input::file('foto');
		if ($file) {
			$destinationPath = public_path() . '/uploads/';
			$filename = $file->getClientOriginalName();
			$upload_success = $file->move($destinationPath, $filename);

			if ($upload_success) {
				$convidado->foto = '/uploads/' . $filename;
			}
		}
        $convidado->save();

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
		$convidado = Convidado::findOrFail($id);

		return view('admin.correcao.edit', compact('convidado'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, EditarConvidadoRequest $request)
	{

		$convidado = Convidado::findOrFail($id);

		/*
		$file = Input::file('image');
		if ($file) {
			$destinationPath = public_path() . '/uploads/';
			$filename = self::formatFileNameWithUserAndTimestamps($file->getClientOriginalName());
			$upload_success = $file->move($destinationPath, $filename);

			if ($upload_success) {
				$convidado->foto = $destinationPath . $filename;
			}
		}
		*/

        $convidado->nome = $request->nome;
        $convidado->descricao = $request->descricao;

		$convidado->save();

		return redirect('admin/correcao');

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
