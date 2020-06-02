<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSoalanKeselamatanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('soalanKeselamatan', function(Blueprint $table)
		{
			$table->foreign('daftar_oleh', 'soalanKeselamatan_FK')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('kemaskini_oleh', 'soalanKeselamatan_FK_1')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('soalanKeselamatan', function(Blueprint $table)
		{
			$table->dropForeign('soalanKeselamatan_FK');
			$table->dropForeign('soalanKeselamatan_FK_1');
		});
	}

}
