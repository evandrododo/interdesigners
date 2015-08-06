<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Convidado;

use Illuminate\Http\Request;

class ProgramacaoController extends Controller {


	/**
	* Display a listing of the resource.
	*
	* @return Response
	*/
	public function index()
	{
		$convidados = Convidado::all();
		$oficinas = Convidado::all();
		$palestras = Convidado::all();
		return view('programacao',compact('convidados'))->with('paginaAtual','programacao');
	}

}
