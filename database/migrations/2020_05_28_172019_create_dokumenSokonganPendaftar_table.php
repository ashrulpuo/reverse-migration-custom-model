<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDokumenSokonganPendaftarTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dokumenSokonganPendaftar', function(Blueprint $table)
		{
			$table->guid('dokumen_sokongan_pendaftar_id')->primary('PK__dokumen___3213E83FBD8A0AED');
			$table->guid('dokumen_id');
			$table->string('dokumen_type');
			$table->string('nama_file', 45)->nullable();
			$table->string('type', 45)->nullable();
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
		Schema::drop('dokumenSokonganPendaftar');
	}

}
