<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Simposio extends Model {

	/**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'InscritoSimposio';

	/**
     * The fields that will be filled out.
     *
     * @var array 
     */
    protected $fillable = [
		'nome',
		'email',
		'cpf',
		'telefone',
		'instituicao_de_origem',
		'tematica',
		'titulo',
		'autor1',
		'autor2',
		'autor3',
		'autor4',
		'autor5',
		'resumo',
		'arquivo',
		'comprovante'
	];

}
