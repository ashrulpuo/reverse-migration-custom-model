<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToStatusSemakanHasTranksaksiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('status_semakan_has_tranksaksi', function(Blueprint $table)
		{
			$table->foreign('status_semakan_id', 'fk_status_semakan_has_tranksaksi_status_semakan1')->references('status_semakan_id')->on('statusSemakan')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('transaksi_id', 'fk_status_semakan_has_tranksaksi_tranksaksi1')->references('id')->on('transaksi')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('daftar_oleh', 'status_semakan_has_tranksaksi_FK')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('kemaskini_oleh', 'status_semakan_has_tranksaksi_FK_1')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('status_semakan_has_tranksaksi', function(Blueprint $table)
		{
			$table->dropForeign('fk_status_semakan_has_tranksaksi_status_semakan1');
			$table->dropForeign('fk_status_semakan_has_tranksaksi_tranksaksi1');
			$table->dropForeign('status_semakan_has_tranksaksi_FK');
			$table->dropForeign('status_semakan_has_tranksaksi_FK_1');
		});
	}

}
