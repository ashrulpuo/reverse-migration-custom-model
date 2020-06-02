<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBorangAKeluarTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('borangAKeluar', function(Blueprint $table)
		{
			$table->foreign('daftar_oleh', 'borangAKeluar_FK')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('kemaskini_oleh', 'borangAKeluar_FK_1')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('penolong_pendaftar_id', 'borang_a_keluar_penolong_pendaftar_id_foreign')->references('penolong_pendaftar_id')->on('penolongPendaftar')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('borangAKeluar', function(Blueprint $table)
		{
			$table->dropForeign('borangAKeluar_FK');
			$table->dropForeign('borangAKeluar_FK_1');
			$table->dropForeign('borang_a_keluar_penolong_pendaftar_id_foreign');
		});
	}

}
