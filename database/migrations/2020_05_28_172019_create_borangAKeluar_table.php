<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBorangAKeluarTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('borangAKeluar', function(Blueprint $table)
		{
			$table->guid('borang_a_keluar_id')->primary('PK__borang_a__3213E83F7FC2A5F3');
			$table->string('no_siri', 45)->nullable();
			$table->string('jumlah_borang', 45)->nullable();
			$table->date('t_keluar')->nullable();
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
		Schema::drop('borangAKeluar');
	}

}
