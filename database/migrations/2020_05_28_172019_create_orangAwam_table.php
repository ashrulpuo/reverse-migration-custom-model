<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrangAwamTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orangAwam', function(Blueprint $table)
		{
			$table->guid('orang_awam_id')->primary('PK__orang_aw__3213E83F13A14F3B');
			$table->guid('bandar_id')->nullable();
			$table->guid('negeri_id')->nullable();
			$table->string('alamat1', 250)->nullable();
			$table->string('alamat2', 250)->nullable();
			$table->string('alamat3', 250)->nullable();
			$table->string('poskod', 5)->nullable();
			$table->string('gambar_kp', 45)->nullable();
			$table->string('gambar_swafoto', 45)->nullable();
			$table->guid('soalan_keselamatan_id')->nullable();
			$table->string('jawapan_keselamatan', 45)->nullable();
			$table->string('no_rujukan', 45)->nullable();
			$table->string('token', 45)->nullable();
			$table->string('no_tac', 45)->nullable();
			$table->dateTime('tarikh_tac')->nullable();
			$table->bigInteger('dikunci_oleh')->nullable();
			$table->dateTime('tarikh_kunci')->nullable();
			$table->date('t_lahir')->nullable();
			$table->guid('alasan_tolak')->nullable();
			$table->string('alasan_lain', 45)->nullable();
			$table->string('myidentity_nama', 250)->nullable();
			$table->date('myidentity_t_lahir')->nullable();
			$table->date('myidentity_t_mati')->nullable();
			$table->string('myidentity_alamat1', 250)->nullable();
			$table->string('myidentity_alamat2', 250)->nullable();
			$table->string('myidentity_alamat3', 250)->nullable();
			$table->string('myidentity_poskod', 45)->nullable();
			$table->string('myidentity_bandar', 45)->nullable();
			$table->string('myidentity_negeri', 45)->nullable();
			$table->string('kod_telefon', 45)->nullable();
			$table->string('notel', 45)->nullable();
			$table->string('pohon_tac', 45)->nullable();
			$table->string('status_telefon', 45)->nullable();
			$table->guid('alasan_kiv')->nullable();
			$table->string('keterangan_kiv', 45)->nullable();
			$table->integer('myidentity_resident')->nullable();
			$table->integer('myidentity_record')->nullable();
			$table->string('surat_alamat1', 45)->nullable();
			$table->string('surat_alamat2', 45)->nullable();
			$table->string('surat_alamat3', 45)->nullable();
			$table->string('surat_poskod', 5)->nullable();
			$table->guid('negara_id')->nullable();
			$table->integer('tac_salah')->nullable();
			$table->date('tarikh_sah')->nullable();
			$table->date('tarikh_aktif')->nullable();
			$table->bigInteger('kiv_oleh')->nullable();
			$table->dateTime('tarikh_kiv')->nullable();
			$table->bigInteger('sah_oleh')->nullable();
			$table->softDeletes();
			$table->guid('users_id');
			$table->date('tarikh_akhir_semak');
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
		Schema::drop('orangAwam');
	}

}
