<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToOrganisasiPartiPolitikTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('organisasiPartiPolitik', function(Blueprint $table)
		{
			$table->foreign('parti_politik_id', 'fk_organisasi_parti_politik_parti_politik1')->references('parti_politik_id')->on('partiPolitik')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('daftar_oleh', 'organisasiPartiPolitik_FK')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('kemaskini_oleh', 'organisasiPartiPolitik_FK_1')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('organisasiPartiPolitik', function(Blueprint $table)
		{
			$table->dropForeign('fk_organisasi_parti_politik_parti_politik1');
			$table->dropForeign('organisasiPartiPolitik_FK');
			$table->dropForeign('organisasiPartiPolitik_FK_1');
		});
	}

}
