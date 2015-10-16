<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Convidado;
use App\Oficina;
use App\Palestra;

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
		$oficinas = Oficina::all();
		$palestras = Palestra::all();
		return view('programacao',compact('oficinas','palestras','convidados'))->with('paginaAtual','programacao');
	}

}
