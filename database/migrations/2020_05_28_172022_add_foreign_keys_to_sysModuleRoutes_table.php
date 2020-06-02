<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSysModuleRoutesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('sysModuleRoutes', function(Blueprint $table)
		{
			$table->foreign('modules_id', 'FK_sysModuleRoutes_sysModules')->references('id')->on('sysModules')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('routes_id', 'FK_sysModuleRoutes_sysRoutes')->references('id')->on('sysRoutes')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('daftar_oleh', 'sysModuleRoutes_FK')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('kemaskini_oleh', 'sysModuleRoutes_FK_1')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('sysModuleRoutes', function(Blueprint $table)
		{
			$table->dropForeign('FK_sysModuleRoutes_sysModules');
			$table->dropForeign('FK_sysModuleRoutes_sysRoutes');
			$table->dropForeign('sysModuleRoutes_FK');
			$table->dropForeign('sysModuleRoutes_FK_1');
		});
	}

}
