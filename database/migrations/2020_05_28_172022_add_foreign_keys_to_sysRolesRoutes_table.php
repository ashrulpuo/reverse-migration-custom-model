<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSysRolesRoutesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('sysRolesRoutes', function(Blueprint $table)
		{
			$table->foreign('roles_id', 'fk_permissions_roles1')->references('id')->on('sysRoles')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('routes_id1', 'fk_permissions_routes_routes1')->references('id')->on('sysRoutes')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('daftar_oleh', 'sysRolesRoutes_FK')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('kemaskini_oleh', 'sysRolesRoutes_FK_1')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('sysRolesRoutes', function(Blueprint $table)
		{
			$table->dropForeign('fk_permissions_roles1');
			$table->dropForeign('fk_permissions_routes_routes1');
			$table->dropForeign('sysRolesRoutes_FK');
			$table->dropForeign('sysRolesRoutes_FK_1');
		});
	}

}
