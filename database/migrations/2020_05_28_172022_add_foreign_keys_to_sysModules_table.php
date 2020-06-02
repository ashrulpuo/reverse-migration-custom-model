<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSysModulesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('sysModules', function(Blueprint $table)
		{
			$table->foreign('daftar_oleh', 'sysModules_FK')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('kemaskini_oleh', 'sysModules_FK_1')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('sysModules', function(Blueprint $table)
		{
			$table->dropForeign('sysModules_FK');
			$table->dropForeign('sysModules_FK_1');
		});
	}

}
