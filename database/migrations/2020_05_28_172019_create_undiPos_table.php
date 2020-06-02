<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUndiPosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('undiPos', function(Blueprint $table)
		{
			$table->guid('permohonan_undi_pos_id')->primary('PK__undi_pos__3213E83FD024EE3E');
			$table->string('no_rujukan', 45)->nullable();
			$table->string('nama', 45)->nullable();
			$table->string('notel', 45)->nullable();
			$table->string('email', 45)->nullable();
			$table->string('no_passport', 45)->nullable();
			$table->string('dpi_nama', 45)->nullable();
			$table->string('dpi_alamat1', 250)->nullable();
			$table->string('dpi_alamat2', 250)->nullable();
			$table->string('dpi_alamat3', 250)->nullable();
			$table->string('dpi_poskod', 5)->nullable();
			$table->string('dpi_bandar', 45)->nullable();
			$table->string('dpi_negeri', 45)->nullable();
			$table->string('dpi_lokaliti', 45)->nullable();
			$table->string('dpi_dm', 45)->nullable();
			$table->string('dpi_dun', 50)->nullable();
			$table->string('dpi_kod_dun', 45)->nullable();
			$table->string('dpi_nama_par', 45)->nullable();
			$table->char('dpi_kod_par', 10)->nullable();
			$table->string('surat_alamat1', 250)->nullable();
			$table->string('surat_alamat2', 250)->nullable();
			$table->string('surat_alamat3', 250)->nullable();
			$table->string('surat_poskod', 5)->nullable();
			$table->string('surat_bandar', 100)->nullable();
			$table->string('surat_negeri', 50)->nullable();
			$table->guid('surat_negara_id')->nullable();
			$table->integer('status')->nullable();
			$table->string('dpi_semasa_nama', 250)->nullable();
			$table->string('dpi_semasa_alamat_1', 250)->nullable();
			$table->string('dpi_semasa_alamat_2', 250)->nullable();
			$table->string('dpi_semasa_alamat_3', 250)->nullable();
			$table->string('dpi_semasa_poskod', 45)->nullable();
			$table->string('dpi_semasa_negeri', 45)->nullable();
			$table->string('dpi_semasa_lokaliti', 45)->nullable();
			$table->string('dpi_semasa_dm', 45)->nullable();
			$table->string('dpi_semasa_dun', 45)->nullable();
			$table->string('dpi_semasa_nama_par', 45)->nullable();
			$table->string('myidentity_alamat_1', 250)->nullable();
			$table->string('myidentity_alamat_2', 250)->nullable();
			$table->string('myidentity_alamat_3', 250)->nullable();
			$table->char('myidentity_bandar', 50)->nullable();
			$table->char('myidentity_negeri', 50)->nullable();
			$table->string('myidentity_resident', 45)->nullable();
			$table->date('myidentity_t_mati')->nullable();
			$table->integer('dikunci_oleh')->nullable();
			$table->dateTime('dikunci_pada')->nullable();
			$table->string('kiv_oleh', 45)->nullable();
			$table->string('alasan_kiv', 45)->nullable();
			$table->string('keterangan_kiv', 45)->nullable();
			$table->integer('disahkan_oleh')->nullable();
			$table->string('alasan_tolak', 45)->nullable();
			$table->integer('dibatal_oleh')->nullable();
			$table->dateTime('dibatal_pada')->nullable();
			$table->string('alasan_batal', 45)->nullable();
			$table->guid('orang_awam_id');
			$table->guid('kategori_undi_pos_id');
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
		Schema::drop('undiPos');
	}

}
