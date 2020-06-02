<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePesertaTaklimatTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pesertaTaklimat', function(Blueprint $table)
		{
			$table->bigInteger('peserta_taklimat_id', true);
			$table->integer('status')->nullable();
			$table->guid('taklimat_id');
			$table->guid('penolong_pendaftar_id');
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
		Schema::drop('pesertaTaklimat');
	}

}
