<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDunTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('dun', function(Blueprint $table)
		{
			$table->foreign('daftar_oleh', 'dun_FK')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('kemaskini_oleh', 'dun_FK_1')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('parlimen_id', 'fk_dun_parlimen1')->references('id')->on('parlimen')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('dun', function(Blueprint $table)
		{
			$table->dropForeign('dun_FK');
			$table->dropForeign('dun_FK_1');
			$table->dropForeign('fk_dun_parlimen1');
		});
	}

}
