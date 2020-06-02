<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSejarahDpprTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('sejarahDppr', function(Blueprint $table)
		{
			$table->foreign('pilihan_raya_id', 'fk_DPPR_history_pilihan_raya1')->references('pilihan_raya_id')->on('pilihanRaya')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('daftar_oleh', 'sejarahDppr_FK')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('kemaskini_oleh', 'sejarahDppr_FK_1')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('sejarahDppr', function(Blueprint $table)
		{
			$table->dropForeign('fk_DPPR_history_pilihan_raya1');
			$table->dropForeign('sejarahDppr_FK');
			$table->dropForeign('sejarahDppr_FK_1');
		});
	}

}
