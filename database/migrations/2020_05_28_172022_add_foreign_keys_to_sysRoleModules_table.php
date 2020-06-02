<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSysRoleModulesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('sysRoleModules', function(Blueprint $table)
		{
			$table->foreign('modules_id', 'FK_sysRoleModules_sysModules')->references('id')->on('sysModules')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('roles_id', 'FK_sysRoleModules_sysRoles')->references('id')->on('sysRoles')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('daftar_oleh', 'sysRoleModules_FK')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('kemaskini_oleh', 'sysRoleModules_FK_1')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('sysRoleModules', function(Blueprint $table)
		{
			$table->dropForeign('FK_sysRoleModules_sysModules');
			$table->dropForeign('FK_sysRoleModules_sysRoles');
			$table->dropForeign('sysRoleModules_FK');
			$table->dropForeign('sysRoleModules_FK_1');
		});
	}

}
