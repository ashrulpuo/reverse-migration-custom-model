<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAlmatIndukTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('almatInduk', function(Blueprint $table)
		{
			$table->foreign('kemaskini_oleh', 'FK_almatInduk_pengguna')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('daftar_oleh', 'FK_almatInduk_pengguna1')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('daftar_oleh', 'almatInduk_FK')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('kemaskini_oleh', 'almatInduk_FK_1')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('lokaliti_id', 'fk_master_address_lokaliti1')->references('lokaliti_id')->on('lokaliti')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('almatInduk', function(Blueprint $table)
		{
			$table->dropForeign('FK_almatInduk_pengguna');
			$table->dropForeign('FK_almatInduk_pengguna1');
			$table->dropForeign('almatInduk_FK');
			$table->dropForeign('almatInduk_FK_1');
			$table->dropForeign('fk_master_address_lokaliti1');
		});
	}

}
