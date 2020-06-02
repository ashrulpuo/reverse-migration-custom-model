<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePermohonanPetugasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('permohonanPetugas', function(Blueprint $table)
		{
			$table->guid('permohonan_petugas_id')->primary('PK__permohon__3213E83F254BBD7A');
			$table->guid('dun_id');
			$table->guid('parlimen_id');
			$table->guid('jawatan_petugas_pilihan_raya_id');
			$table->guid('negeri_id')->nullable();
			$table->guid('orang_awam_id');
			$table->integer('status')->nullable();
			$table->string('alamat_surat_1', 150)->nullable();
			$table->string('alamat_surat_2', 150)->nullable();
			$table->string('alamat_surat_3', 150)->nullable();
			$table->string('bandar', 50)->nullable();
			$table->char('poskod_surat', 5)->nullable();
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
		Schema::drop('permohonanPetugas');
	}

}
