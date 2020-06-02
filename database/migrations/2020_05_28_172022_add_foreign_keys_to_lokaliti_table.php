<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLokalitiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('lokaliti', function(Blueprint $table)
		{
			$table->foreign('dm_id', 'fk_lokaliti_daerah_mengundi1')->references('dm_id')->on('dm')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('daftar_oleh', 'lokaliti_FK')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('kemaskini_oleh', 'lokaliti_FK_1')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('lokaliti', function(Blueprint $table)
		{
			$table->dropForeign('fk_lokaliti_daerah_mengundi1');
			$table->dropForeign('lokaliti_FK');
			$table->dropForeign('lokaliti_FK_1');
		});
	}

}
