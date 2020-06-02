<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDpiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('dpi', function(Blueprint $table)
		{
			$table->foreign('alamat_induk_id', 'FK_dpi_almatInduk')->references('alamat_induk_id')->on('almatInduk')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('agama_id', 'FK_dpi_refAgama')->references('agama_id')->on('refAgama')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('alasan_potong_id', 'FK_dpi_refAlasan')->references('alasan_id')->on('refAlasan')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('bangsa_id', 'FK_dpi_refBangsa')->references('bangsa_id')->on('refBangsa')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('jantina_id', 'FK_dpi_refJantina')->references('jantina_id')->on('refJantina')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('negeri_id', 'FK_dpi_refNegeri')->references('negeri_id')->on('refNegeri')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('daftar_oleh', 'dpi_FK')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('kemaskini_oleh', 'dpi_FK_1')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('lokaliti_id', 'fk_pemilih_lokaliti1')->references('lokaliti_id')->on('lokaliti')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('warta_id', 'fk_pemilih_warta1')->references('warta_id')->on('warta')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('dpi', function(Blueprint $table)
		{
			$table->dropForeign('FK_dpi_almatInduk');
			$table->dropForeign('FK_dpi_refAgama');
			$table->dropForeign('FK_dpi_refAlasan');
			$table->dropForeign('FK_dpi_refBangsa');
			$table->dropForeign('FK_dpi_refJantina');
			$table->dropForeign('FK_dpi_refNegeri');
			$table->dropForeign('dpi_FK');
			$table->dropForeign('dpi_FK_1');
			$table->dropForeign('fk_pemilih_lokaliti1');
			$table->dropForeign('fk_pemilih_warta1');
		});
	}

}
