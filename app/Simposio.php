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
		'titulo',
		'descricao',
		'arquivo'
	];

}
