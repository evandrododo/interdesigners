<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscricoes extends Model {

	/**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'InscritoSimposioGeral';

	/**
     * The fields that will be filled out.
     *
     * @var array 
     */
    protected $fillable = [
		'nome',
		'rg',
		'cpf',
		'dob',
		'email',
		'telefone',
		'facebook',
		'contatoemergencia',
		'telefoneemergencia',
		'cidadeestado',
		'instituicao_de_origem',
		'curso',
		'anotermo',
		'outrocongresso',
		'artigo',
		'tituloartigo',
		'comprovante'
	];

}
