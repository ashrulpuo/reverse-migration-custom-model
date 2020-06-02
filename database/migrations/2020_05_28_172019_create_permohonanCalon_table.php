<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePermohonanCalonTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('permohonanCalon', function(Blueprint $table)
		{
			$table->guid('permohonan_calon_id')->primary('PK__permohon__3213E83F5BE77749');
			$table->guid('bahagian_pilihan_raya_id');
			$table->guid('parti_politik_id');
			$table->guid('gelaran_id')->nullable();
			$table->string('nama', 250)->nullable();
			$table->string('no_kp', 12)->nullable();
			$table->string('borang', 45)->nullable();
			$table->string('alamat_tetap1', 250)->nullable();
			$table->string('alamat_tetap2', 250)->nullable();
			$table->string('alamat_tetap3', 250)->nullable();
			$table->string('bandar_tetap', 100)->nullable();
			$table->string('poskod_tetap', 5)->nullable();
			$table->string('kod_negeri_tetap', 45)->nullable();
			$table->string('alamat_surat_1', 250)->nullable();
			$table->string('alamat_surat_2', 250)->nullable();
			$table->string('alamat_surat_3', 250)->nullable();
			$table->string('poskod_surat', 5)->nullable();
			$table->string('bandar_surat', 100)->nullable();
			$table->string('kod_negeri_surat', 45)->nullable();
			$table->string('nama_saksi_1', 250)->nullable();
			$table->string('no_kp_saksi_1', 12)->nullable();
			$table->string('nama_saksi_2', 250)->nullable();
			$table->string('no_kp_saksi_2', 12)->nullable();
			$table->integer('status_bayaran_proses')->nullable();
			$table->integer('status_bayaran_deposit')->nullable();
			$table->integer('status')->nullable();
			$table->guid('users_id');
			$table->guid('alasan_id');
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
		Schema::drop('permohonanCalon');
	}

}
