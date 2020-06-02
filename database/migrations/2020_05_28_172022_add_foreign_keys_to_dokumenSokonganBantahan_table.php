<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDokumenSokonganBantahanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('dokumenSokonganBantahan', function(Blueprint $table)
		{
			$table->foreign('daftar_oleh', 'dokumenSokonganBantahan_FK')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('kemaskini_oleh', 'dokumenSokonganBantahan_FK_1')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('bantahan_id', 'fk_dokumen_sokongan_batahan_bantahan1')->references('bantahan_id')->on('bantahan')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('dokumenSokonganBantahan', function(Blueprint $table)
		{
			$table->dropForeign('dokumenSokonganBantahan_FK');
			$table->dropForeign('dokumenSokonganBantahan_FK_1');
			$table->dropForeign('fk_dokumen_sokongan_batahan_bantahan1');
		});
	}

}
