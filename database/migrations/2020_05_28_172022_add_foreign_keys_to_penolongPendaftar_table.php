<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPenolongPendaftarTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('penolongPendaftar', function(Blueprint $table)
		{
			$table->foreign('penolong_pendaftar_id', 'FK_penolongPendaftar_penolongPendaftar')->references('penolong_pendaftar_id')->on('penolongPendaftar')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('bandar_id', 'FK_penolongPendaftar_refBandar')->references('bandar_id')->on('refBandar')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('negeri_id', 'FK_penolongPendaftar_refNegeri')->references('negeri_id')->on('refNegeri')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('organisasi_id', 'fk_penolong_pendaftar_organisasi1')->references('organisasi_id')->on('organisasi')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('organisasi_id', 'fk_penolong_pendaftar_parti_politik1')->references('parti_politik_id')->on('partiPolitik')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('daftar_oleh', 'penolongPendaftar_FK')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('kemaskini_oleh', 'penolongPendaftar_FK_1')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('penolongPendaftar', function(Blueprint $table)
		{
			$table->dropForeign('FK_penolongPendaftar_penolongPendaftar');
			$table->dropForeign('FK_penolongPendaftar_refBandar');
			$table->dropForeign('FK_penolongPendaftar_refNegeri');
			$table->dropForeign('fk_penolong_pendaftar_organisasi1');
			$table->dropForeign('fk_penolong_pendaftar_parti_politik1');
			$table->dropForeign('penolongPendaftar_FK');
			$table->dropForeign('penolongPendaftar_FK_1');
		});
	}

}
