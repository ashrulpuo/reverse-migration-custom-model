<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRefAlasanPenolakanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('refAlasanPenolakan', function(Blueprint $table)
		{
			$table->foreign('daftar_oleh', 'refAlasanPenolakan_FK')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('kemaskini_oleh', 'refAlasanPenolakan_FK_1')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('refAlasanPenolakan', function(Blueprint $table)
		{
			$table->dropForeign('refAlasanPenolakan_FK');
			$table->dropForeign('refAlasanPenolakan_FK_1');
		});
	}

}
