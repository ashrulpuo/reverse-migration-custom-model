<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPenggunaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pengguna', function(Blueprint $table)
		{
			$table->foreign('pengguna_id', 'FK_pengguna_pengguna')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('daftar_oleh', 'pengguna_FK')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('kemaskini_oleh', 'pengguna_FK_1')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pengguna', function(Blueprint $table)
		{
			$table->dropForeign('FK_pengguna_pengguna');
			$table->dropForeign('pengguna_FK');
			$table->dropForeign('pengguna_FK_1');
		});
	}

}
