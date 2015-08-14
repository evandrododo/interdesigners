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
			$table->string('descricao', 500)->nullable();
			$table->string('arquivo')->nullable();
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
