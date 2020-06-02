<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSaluranMengundiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('saluranMengundi', function(Blueprint $table)
		{
			$table->foreign('pusat_mengundi_pilihan_raya_id', 'fk_saluran_mengundi_pusat_mengundi_pilihan_raya1')->references('pusat_mengundi_pilihan_raya_id')->on('pusatMengundiPilihanRaya')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('daftar_oleh', 'saluranMengundi_FK')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('kemaskini_oleh', 'saluranMengundi_FK_1')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('saluranMengundi', function(Blueprint $table)
		{
			$table->dropForeign('fk_saluran_mengundi_pusat_mengundi_pilihan_raya1');
			$table->dropForeign('saluranMengundi_FK');
			$table->dropForeign('saluranMengundi_FK_1');
		});
	}

}
