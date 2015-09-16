<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdicionarNotaSimposio extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('InscritoSimposio', function(Blueprint $table)
		{
		    $table->text('json_avaliacao')->nullable();
			$table->string('autor6', 140)->nullable();
		    $table->decimal('decimal_nota', 5, 2)->nullable();

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('InscritoSimposio', function($table)
		{
		    $table->dropColumn(array('json_avaliacao', 'decimal_nota', 'autor6'));
		});
	}

}
