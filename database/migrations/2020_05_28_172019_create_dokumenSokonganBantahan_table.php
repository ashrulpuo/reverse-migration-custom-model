<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDokumenSokonganBantahanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dokumenSokonganBantahan', function(Blueprint $table)
		{
			$table->guid('dokumen_sokongan_bantahan_id')->primary('PK__dokumen___3213E83FD5E60746');
			$table->guid('bantahan_id');
			$table->string('nama_dokumen');
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
		Schema::drop('dokumenSokonganBantahan');
	}

}
