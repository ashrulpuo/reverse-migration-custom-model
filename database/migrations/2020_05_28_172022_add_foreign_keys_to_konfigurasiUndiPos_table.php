<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToKonfigurasiUndiPosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('konfigurasiUndiPos', function(Blueprint $table)
		{
			$table->foreign('daftar_oleh', 'konfigurasiUndiPos_FK')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('kemaskini_oleh', 'konfigurasiUndiPos_FK_1')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('konfigurasiUndiPos', function(Blueprint $table)
		{
			$table->dropForeign('konfigurasiUndiPos_FK');
			$table->dropForeign('konfigurasiUndiPos_FK_1');
		});
	}

}
