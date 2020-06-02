<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPesertaTaklimatTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pesertaTaklimat', function(Blueprint $table)
		{
			$table->foreign('daftar_oleh', 'pesertaTaklimat_FK')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('kemaskini_oleh', 'pesertaTaklimat_FK_1')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('penolong_pendaftar_id', 'peserta_taklimat_penolong_pendaftar_id_foreign')->references('penolong_pendaftar_id')->on('penolongPendaftar')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('taklimat_id', 'peserta_taklimat_taklimat_id_foreign')->references('taklimat_id')->on('taklimat')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pesertaTaklimat', function(Blueprint $table)
		{
			$table->dropForeign('pesertaTaklimat_FK');
			$table->dropForeign('pesertaTaklimat_FK_1');
			$table->dropForeign('peserta_taklimat_penolong_pendaftar_id_foreign');
			$table->dropForeign('peserta_taklimat_taklimat_id_foreign');
		});
	}

}
