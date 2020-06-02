<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDunTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dun', function(Blueprint $table)
		{
			$table->guid('id')->primary('PK__dun__3213E83F0E5F40B4');
			$table->string('dun', 45)->nullable();
			$table->string('kod_dun', 45)->nullable();
			$table->guid('parlimen_id');
			$table->string('duncol', 45)->nullable();
			$table->softDeletes();
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
		Schema::drop('dun');
	}

}
