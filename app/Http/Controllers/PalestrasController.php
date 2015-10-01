<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Palestra;
use App\Http\Requests\EditarPalestraRequest;
use Input;

use Illuminate\Http\Request;

class PalestrasController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$palestras = Palestra::all();

		return view('admin.palestras.index', compact('palestras'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

		return view('admin.palestras.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		 $palestra = new Palestra;

         $palestra->nome = $request->nome;
         $palestra->descricao = $request->descricao;

		 $file = Input::file('foto');
		 if ($file) {
		 	$destinationPath = public_path() . '/uploads/';
		 	$filename = $file->getClientOriginalName();
		 	$upload_success = $file->move($destinationPath, $filename);

		 	if ($upload_success) {
		 		$palestra->foto = '/uploads/' . $filename;
		 	}
		 }
         $palestra->save();

		 return redirect('admin/palestras');
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$palestra = Palestra::findOrFail($id);

		return view('admin.palestras.edit', compact('palestra'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, EditarPalestraRequest $request)
	{

		$palestra = Palestra::findOrFail($id);


		$file = Input::file('foto');
		if ($file) {
		 	$destinationPath = public_path() . '/uploads/';
		 	$filename = $file->getClientOriginalName();
		 	$upload_success = $file->move($destinationPath, $filename);

		 	if ($upload_success) {
		 		$palestra->foto = '/uploads/' . $filename;
		 	}
		}

                $palestra->nome = $request->nome;
                $palestra->descricao = $request->descricao;

		$palestra->save();
		return redirect('admin/palestras');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
            $palestra = Palestra::findOrFail($id);

            $palestra->delete();


            $palestras = Palestra::all();
            return view('admin.palestras.index', compact('palestras'));
	}

	//

}
