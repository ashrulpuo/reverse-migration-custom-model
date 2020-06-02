<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSiasatanAwamTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('siasatanAwam', function(Blueprint $table)
		{
			$table->foreign('siasatan_id', 'fk_siasatan_awam_bantahan1')->references('bantahan_id')->on('bantahan')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('siasatan_id', 'fk_siasatan_awam_rayuan1')->references('rayuan_id')->on('rayuan')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('daftar_oleh', 'siasatanAwam_FK')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('kemaskini_oleh', 'siasatanAwam_FK_1')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('siasatanAwam', function(Blueprint $table)
		{
			$table->dropForeign('fk_siasatan_awam_bantahan1');
			$table->dropForeign('fk_siasatan_awam_rayuan1');
			$table->dropForeign('siasatanAwam_FK');
			$table->dropForeign('siasatanAwam_FK_1');
		});
	}

}
