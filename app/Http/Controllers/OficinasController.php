<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Oficina;
use App\Http\Requests\EditarOficinaRequest;
use Input;

use Illuminate\Http\Request;

class OficinasController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$oficinas = Oficina::all();

		return view('admin.oficinas.index', compact('oficinas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

		return view('admin.oficinas.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		 $oficina = new Oficina;

         $oficina->nome = $request->nome;
         $oficina->descricao = $request->descricao;

		 $file = Input::file('foto');
		 if ($file) {
		 	$destinationPath = public_path() . '/uploads/';
		 	$filename = $file->getClientOriginalName();
		 	$upload_success = $file->move($destinationPath, $filename);

		 	if ($upload_success) {
		 		$oficina->foto = '/uploads/' . $filename;
		 	}
		 }
         $oficina->save();

		 return redirect('admin/oficinas');
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$oficina = Oficina::findOrFail($id);

		return view('admin.oficinas.edit', compact('oficina'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, EditarOficinaRequest $request)
	{

		$oficina = Oficina::findOrFail($id);


		$file = Input::file('foto');
		if ($file) {
		 	$destinationPath = public_path() . '/uploads/';
		 	$filename = $file->getClientOriginalName();
		 	$upload_success = $file->move($destinationPath, $filename);

		 	if ($upload_success) {
		 		$oficina->foto = '/uploads/' . $filename;
		 	}
		}

                $oficina->nome = $request->nome;
                $oficina->descricao = $request->descricao;

		$oficina->save();
		return redirect('admin/oficinas');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
            $oficina = Oficina::findOrFail($id);

            $oficina->delete();


            $oficinas = Oficina::all();
            return view('admin.oficinas.index', compact('oficinas'));
	}

}
