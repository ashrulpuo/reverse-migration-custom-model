<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPilihanRayaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pilihanRaya', function(Blueprint $table)
		{
			$table->foreign('daftar_oleh', 'pilihanRaya_FK')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('kemaskini_oleh', 'pilihanRaya_FK_1')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pilihanRaya', function(Blueprint $table)
		{
			$table->dropForeign('pilihanRaya_FK');
			$table->dropForeign('pilihanRaya_FK_1');
		});
	}

}
