<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDmTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('dm', function(Blueprint $table)
		{
			$table->foreign('daftar_oleh', 'dm_FK')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('kemaskini_oleh', 'dm_FK_1')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('dun_id', 'fk_daerah_mengundi_dun1')->references('id')->on('dun')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('dm', function(Blueprint $table)
		{
			$table->dropForeign('dm_FK');
			$table->dropForeign('dm_FK_1');
			$table->dropForeign('fk_daerah_mengundi_dun1');
		});
	}

}
