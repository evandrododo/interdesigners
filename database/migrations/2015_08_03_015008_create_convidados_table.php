<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConvidadosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('convidados', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('foto')->nullable();
			$table->string('descricao', 500)->nullable();
			$table->string('nome', 140)->nullable();

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
		Schema::drop('convidados');
	}

}
