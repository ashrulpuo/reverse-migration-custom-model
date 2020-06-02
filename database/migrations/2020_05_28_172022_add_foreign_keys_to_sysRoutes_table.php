<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSysRoutesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('sysRoutes', function(Blueprint $table)
		{
			$table->foreign('daftar_oleh', 'sysRoutes_FK')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('kemaskini_oleh', 'sysRoutes_FK_1')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('sysRoutes', function(Blueprint $table)
		{
			$table->dropForeign('sysRoutes_FK');
			$table->dropForeign('sysRoutes_FK_1');
		});
	}

}
