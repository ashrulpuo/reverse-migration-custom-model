<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDpprTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('dppr', function(Blueprint $table)
		{
			$table->foreign('daftar_oleh', 'dppr_FK')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('kemaskini_oleh', 'dppr_FK_1')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('pilihan_raya_id', 'fk_DPPR_pilihan_raya1')->references('pilihan_raya_id')->on('pilihanRaya')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('dm_id', 'fk_dppr_daerah_mengundi1')->references('dm_id')->on('dm')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('dun_id', 'fk_dppr_dun1')->references('id')->on('dun')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('lokaliti_id', 'fk_dppr_lokaliti1')->references('lokaliti_id')->on('lokaliti')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('parlimen_id', 'fk_dppr_parlimen1')->references('id')->on('parlimen')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('saluran_mengundi_id', 'fk_dppr_saluran_mengundi1')->references('saluran_mengundi_id')->on('saluranMengundi')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('dppr', function(Blueprint $table)
		{
			$table->dropForeign('dppr_FK');
			$table->dropForeign('dppr_FK_1');
			$table->dropForeign('fk_DPPR_pilihan_raya1');
			$table->dropForeign('fk_dppr_daerah_mengundi1');
			$table->dropForeign('fk_dppr_dun1');
			$table->dropForeign('fk_dppr_lokaliti1');
			$table->dropForeign('fk_dppr_parlimen1');
			$table->dropForeign('fk_dppr_saluran_mengundi1');
		});
	}

}
