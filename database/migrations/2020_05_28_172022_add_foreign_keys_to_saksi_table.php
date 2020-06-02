<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSaksiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('saksi', function(Blueprint $table)
		{
			$table->foreign('siasatan_awam_id', 'fk_saksi_siasatan_awam1')->references('siasiatan_awam_id')->on('siasatanAwam')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('daftar_oleh', 'saksi_FK')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('kemaskini_oleh', 'saksi_FK_1')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('saksi', function(Blueprint $table)
		{
			$table->dropForeign('fk_saksi_siasatan_awam1');
			$table->dropForeign('saksi_FK');
			$table->dropForeign('saksi_FK_1');
		});
	}

}
