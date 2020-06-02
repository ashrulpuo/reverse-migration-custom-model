<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSysRolesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('sysRoles', function(Blueprint $table)
		{
			$table->foreign('daftar_oleh', 'sysRoles_FK')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('kemaskini_oleh', 'sysRoles_FK_1')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('sysRoles', function(Blueprint $table)
		{
			$table->dropForeign('sysRoles_FK');
			$table->dropForeign('sysRoles_FK_1');
		});
	}

}
