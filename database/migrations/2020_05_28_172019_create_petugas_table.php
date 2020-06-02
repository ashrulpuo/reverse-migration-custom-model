<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePetugasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('petugas', function(Blueprint $table)
		{
			$table->guid('id')->primary('PK__petugas___3213E83FDBB23E01');
			$table->guid('jawatan_petugas_id')->nullable();
			$table->guid('permohonan_petugas_id')->nullable();
			$table->guid('pilihan_raya_id');
			$table->string('nama', 45)->nullable();
			$table->string('no_kp', 45)->nullable();
			$table->string('alamat_surat_1', 150)->nullable();
			$table->string('alamat_surat_2', 150)->nullable();
			$table->string('alamat_surat_3', 150)->nullable();
			$table->string('bandar', 45)->nullable();
			$table->guid('negeri_id')->nullable();
			$table->string('no_tel', 45)->nullable();
			$table->string('emel', 45)->nullable();
			$table->string('no_akaun', 45)->nullable();
			$table->string('nama_bank', 45)->nullable();
			$table->string('gambar', 45)->nullable();
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
		Schema::drop('petugas');
	}

}
