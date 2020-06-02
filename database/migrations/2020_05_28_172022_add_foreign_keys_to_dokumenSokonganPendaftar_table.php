<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDokumenSokonganPendaftarTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('dokumenSokonganPendaftar', function(Blueprint $table)
		{
			$table->foreign('daftar_oleh', 'dokumenSokonganPendaftar_FK')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('kemaskini_oleh', 'dokumenSokonganPendaftar_FK_1')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('dokumen_id', 'fk_dokumen_sokongan_pendaftar_pendaftar1')->references('pendaftar_id')->on('pendaftar')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('dokumen_id', 'fk_dokumen_sokongan_pendaftar_pengadil1')->references('pengadil_id')->on('pengadil')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('dokumen_id', 'fk_dokumen_sokongan_pendaftar_penolong_pendaftar1')->references('penolong_pendaftar_id')->on('penolongPendaftar')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('dokumenSokonganPendaftar', function(Blueprint $table)
		{
			$table->dropForeign('dokumenSokonganPendaftar_FK');
			$table->dropForeign('dokumenSokonganPendaftar_FK_1');
			$table->dropForeign('fk_dokumen_sokongan_pendaftar_pendaftar1');
			$table->dropForeign('fk_dokumen_sokongan_pendaftar_pengadil1');
			$table->dropForeign('fk_dokumen_sokongan_pendaftar_penolong_pendaftar1');
		});
	}

}
