<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBahagianPilihanRayaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('bahagianPilihanRaya', function(Blueprint $table)
		{
			$table->foreign('daftar_oleh', 'FK_bahagianPilihanRaya_pengguna')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('kemaskini_oleh', 'FK_bahagianPilihanRaya_pengguna1')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('daftar_oleh', 'bahagianPilihanRaya_FK')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('kemaskini_oleh', 'bahagianPilihanRaya_FK_1')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('pilihan_raya_id', 'fk_bahagian_pilihan_raya_pilihan_raya1')->references('pilihan_raya_id')->on('pilihanRaya')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('bahagianPilihanRaya', function(Blueprint $table)
		{
			$table->dropForeign('FK_bahagianPilihanRaya_pengguna');
			$table->dropForeign('FK_bahagianPilihanRaya_pengguna1');
			$table->dropForeign('bahagianPilihanRaya_FK');
			$table->dropForeign('bahagianPilihanRaya_FK_1');
			$table->dropForeign('fk_bahagian_pilihan_raya_pilihan_raya1');
		});
	}

}
