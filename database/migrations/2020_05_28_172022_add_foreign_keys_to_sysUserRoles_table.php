<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSysUserRolesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('sysUserRoles', function(Blueprint $table)
		{
			$table->foreign('roles_id', 'FK_sysUserRoles_sysRoles')->references('id')->on('sysRoles')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('users_id', 'FK_sysUserRoles_users')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('daftar_oleh', 'sysUserRoles_FK')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('kemaskini_oleh', 'sysUserRoles_FK_1')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('sysUserRoles', function(Blueprint $table)
		{
			$table->dropForeign('FK_sysUserRoles_sysRoles');
			$table->dropForeign('FK_sysUserRoles_users');
			$table->dropForeign('sysUserRoles_FK');
			$table->dropForeign('sysUserRoles_FK_1');
		});
	}

}
