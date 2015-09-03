<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InscricaoGeral extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('InscritoGeral', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nome', 140)->nullable();
			$table->string('pacote', 140)->nullable();
			$table->string('rg', 140)->nullable();
			$table->string('cpf', 140)->nullable();
			$table->string('dob', 140)->nullable();
			$table->string('tiposanguineo', 140)->nullable();
			$table->boolean('necessecidades_especiais')->nullable();
			$table->boolean('medicacao_controlada')->nullable();
			$table->boolean('alergias')->nullable();
			$table->boolean('restricoes_alimenticias')->nullable();
			$table->string('email', 140)->nullable();
			$table->string('telefone', 140)->nullable();
			$table->string('facebook', 140)->nullable();
			$table->string('contatoemergencia', 140)->nullable();
			$table->string('telefoneemergencia', 140)->nullable();
			$table->string('cidadeestado', 140)->nullable();
			$table->string('instituicao_de_origem', 140)->nullable();
			$table->string('curso')->nullable();
			$table->string('anotermo', 140)->nullable();
			$table->string('outrocongresso', 140)->nullable();
			$table->string('camiseta', 140)->nullable();
			$table->boolean('alimentacao')->nullable();
			$table->string('tipo_comida', 140)->nullable();
			$table->string('tamanho_comida', 140)->nullable();
			$table->string('comprovante')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('InscritoGeral');
	}

}
