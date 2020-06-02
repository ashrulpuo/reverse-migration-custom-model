<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRefBangsaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('refBangsa', function(Blueprint $table)
		{
			$table->guid('bangsa_id')->primary('PK__tetapan___3213E83FD29CD566');
			$table->string('kod')->nullable();
			$table->string('bandar');
			$table->smallInteger('papar');
			$table->dateTime('daftar_pada')->nullable();
			$table->guid('daftar_oleh')->nullable();
			$table->dateTime('kemaskini_pada')->nullable();
			$table->guid('kemaskini_oleh')->nullable();
			$table->dateTime('hapus_data')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('refBangsa');
	}

}
