<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateParameterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('parameter', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->string('nama', 45)->nullable();
			$table->string('kod', 45)->nullable();
			$table->integer('parent')->nullable();
			$table->integer('aturan')->nullable();
			$table->string('parametercol', 45)->nullable();
			$table->dateTime('daftar_pada')->nullable();
			$table->guid('daftar_oleh')->nullable();
			$table->dateTime('kemaskini_pada')->nullable();
			$table->guid('kemaskini_oleh')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('parameter');
	}

}
