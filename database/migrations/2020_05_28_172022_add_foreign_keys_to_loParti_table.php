<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLoPartiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('loParti', function(Blueprint $table)
		{
			$table->foreign('parti_politik_id', 'fk_lo_parti_parti_politik1')->references('parti_politik_id')->on('partiPolitik')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('daftar_oleh', 'loParti_FK')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('kemaskini_oleh', 'loParti_FK_1')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('loParti', function(Blueprint $table)
		{
			$table->dropForeign('fk_lo_parti_parti_politik1');
			$table->dropForeign('loParti_FK');
			$table->dropForeign('loParti_FK_1');
		});
	}

}
