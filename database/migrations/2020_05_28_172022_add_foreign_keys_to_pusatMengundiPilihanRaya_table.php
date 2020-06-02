<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPusatMengundiPilihanRayaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pusatMengundiPilihanRaya', function(Blueprint $table)
		{
			$table->foreign('pusat_mengundi_id', 'fk_pilihan_raya_pusat_mengundi_pusat_mengundi1')->references('pusat_mengundi_id')->on('pusatMengundi')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('bahagian_pilihan_raya_id', 'fk_pusat_mengundi_pilihan_raya_bahagian_pilihan_raya1')->references('bahagian_pilihan_raya_id')->on('bahagianPilihanRaya')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('daftar_oleh', 'pusatMengundiPilihanRaya_FK')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('kemaskini_oleh', 'pusatMengundiPilihanRaya_FK_1')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pusatMengundiPilihanRaya', function(Blueprint $table)
		{
			$table->dropForeign('fk_pilihan_raya_pusat_mengundi_pusat_mengundi1');
			$table->dropForeign('fk_pusat_mengundi_pilihan_raya_bahagian_pilihan_raya1');
			$table->dropForeign('pusatMengundiPilihanRaya_FK');
			$table->dropForeign('pusatMengundiPilihanRaya_FK_1');
		});
	}

}
