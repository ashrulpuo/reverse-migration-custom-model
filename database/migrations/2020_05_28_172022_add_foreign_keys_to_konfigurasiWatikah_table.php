<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToKonfigurasiWatikahTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('konfigurasiWatikah', function(Blueprint $table)
		{
			$table->foreign('daftar_oleh', 'konfigurasiWatikah_FK')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('kemaskini_oleh', 'konfigurasiWatikah_FK_1')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('konfigurasiWatikah', function(Blueprint $table)
		{
			$table->dropForeign('konfigurasiWatikah_FK');
			$table->dropForeign('konfigurasiWatikah_FK_1');
		});
	}

}
