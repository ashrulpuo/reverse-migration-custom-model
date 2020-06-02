<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateParlimenTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('parlimen', function(Blueprint $table)
		{
			$table->guid('id')->primary('PK__parlimen__3213E83F43E9DE1F');
			$table->guid('negeri_id')->nullable();
			$table->string('par', 45)->nullable();
			$table->string('kod_par', 45)->nullable();
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
		Schema::drop('parlimen');
	}

}
