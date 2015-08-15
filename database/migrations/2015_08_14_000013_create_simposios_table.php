<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSimposiosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('InscritoSimposio', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nome', 140)->nullable();
			$table->string('email', 140)->nullable();
			$table->string('cpf', 140)->nullable();
			$table->string('telefone', 140)->nullable();
			$table->string('instituicao_de_origem', 140)->nullable();
			$table->string('arquivo')->nullable();
			$table->string('tematica', 140)->nullable();
			$table->string('titulo', 140)->nullable();
			$table->string('autor1', 140)->nullable();
			$table->string('autor2', 140)->nullable();
			$table->string('autor3', 140)->nullable();
			$table->string('autor4', 140)->nullable();
			$table->string('autor5', 140)->nullable();
			$table->string('resumo', 500)->nullable();
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
		Schema::drop('InscritoSimposio');
	}

}
