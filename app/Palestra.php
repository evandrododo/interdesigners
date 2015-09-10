<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Palestra extends Model {

	protected $fillable = [
		'nome',
		'descricao',
		'foto'
	];
}
