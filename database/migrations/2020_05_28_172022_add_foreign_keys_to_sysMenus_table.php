<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSysMenusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('sysMenus', function(Blueprint $table)
		{
			$table->foreign('routes_id', 'FK_sysMenus_sysMenus')->references('id')->on('sysRoutes')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('daftar_oleh', 'sysMenus_FK')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('kemaskini_oleh', 'sysMenus_FK_1')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('sysMenus', function(Blueprint $table)
		{
			$table->dropForeign('FK_sysMenus_sysMenus');
			$table->dropForeign('sysMenus_FK');
			$table->dropForeign('sysMenus_FK_1');
		});
	}

}
