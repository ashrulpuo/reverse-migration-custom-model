<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTuntutanHonoriumTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tuntutanHonorium', function(Blueprint $table)
		{
			$table->foreign('daftar_oleh', 'tuntutanHonorium_FK')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('kemaskini_oleh', 'tuntutanHonorium_FK_1')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('penolong_pendaftar_id', 'tuntutan_honorium_penolong_pendaftar_id_foreign')->references('penolong_pendaftar_id')->on('penolongPendaftar')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tuntutanHonorium', function(Blueprint $table)
		{
			$table->dropForeign('tuntutanHonorium_FK');
			$table->dropForeign('tuntutanHonorium_FK_1');
			$table->dropForeign('tuntutan_honorium_penolong_pendaftar_id_foreign');
		});
	}

}
