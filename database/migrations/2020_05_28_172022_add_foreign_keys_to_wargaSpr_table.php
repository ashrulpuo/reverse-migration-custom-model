<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToWargaSprTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('wargaSpr', function(Blueprint $table)
		{
			$table->foreign('jawatan_id', 'FK_wargaSpr_refJawatan')->references('jawatan_id')->on('refJawatan')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('ppn_id', 'FK_wargaSpr_refPpn')->references('ppn_id')->on('refPpn')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('id', 'FK_wargaSpr_wargaSpr')->references('id')->on('wargaSpr')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('users_id', 'fk_warga_spr_users1')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('daftar_oleh', 'wargaSpr_FK')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('kemaskini_oleh', 'wargaSpr_FK_1')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('wargaSpr', function(Blueprint $table)
		{
			$table->dropForeign('FK_wargaSpr_refJawatan');
			$table->dropForeign('FK_wargaSpr_refPpn');
			$table->dropForeign('FK_wargaSpr_wargaSpr');
			$table->dropForeign('fk_warga_spr_users1');
			$table->dropForeign('wargaSpr_FK');
			$table->dropForeign('wargaSpr_FK_1');
		});
	}

}
