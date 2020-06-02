<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTarikhPilihanRayaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tarikhPilihanRaya', function(Blueprint $table)
		{
			$table->foreign('peristiwa_id', 'fk_pilihan_raya_tarikh_peristiwa1')->references('peristiwa_id')->on('refPeristiwa')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('pilihan_raya_id', 'fk_pilihan_raya_tarikh_pilihan_raya1')->references('pilihan_raya_id')->on('pilihanRaya')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('daftar_oleh', 'tarikhPilihanRaya_FK')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('kemaskini_oleh', 'tarikhPilihanRaya_FK_1')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tarikhPilihanRaya', function(Blueprint $table)
		{
			$table->dropForeign('fk_pilihan_raya_tarikh_peristiwa1');
			$table->dropForeign('fk_pilihan_raya_tarikh_pilihan_raya1');
			$table->dropForeign('tarikhPilihanRaya_FK');
			$table->dropForeign('tarikhPilihanRaya_FK_1');
		});
	}

}
