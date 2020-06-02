<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRefPpnTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('refPpn', function(Blueprint $table)
		{
			$table->foreign('daftar_oleh', 'refPpn_FK')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('kemaskini_oleh', 'refPpn_FK_1')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('refPpn', function(Blueprint $table)
		{
			$table->dropForeign('refPpn_FK');
			$table->dropForeign('refPpn_FK_1');
		});
	}

}
