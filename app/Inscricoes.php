<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscricoes extends Model {

	/**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'InscritoGeral';

	/**
     * The fields that will be filled out.
     *
     * @var array 
     */
    protected $fillable = [
		'nome',
		'pacote',
		'rg',
		'cpf',
		'dob',
		'tiposanguineo',
		'necessecidades_especiais',
		'medicacao_controlada',
		'alergias',
		'restricoes_alimenticias',
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
		'camiseta',
		'alimentacao',
		'tipo_comida',
		'tamanho_comida',
		'comprovante'
	];

}
