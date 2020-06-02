<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBahanBuktiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('bahanBukti', function(Blueprint $table)
		{
			$table->foreign('daftar_oleh', 'FK_bahanBukti_pengguna')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('kemaskini_oleh', 'bahanBukti_FK')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('siasatan_awam_id', 'fk_bahan_bukti_siasatan_awam1')->references('siasiatan_awam_id')->on('siasatanAwam')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('bahanBukti', function(Blueprint $table)
		{
			$table->dropForeign('FK_bahanBukti_pengguna');
			$table->dropForeign('bahanBukti_FK');
			$table->dropForeign('fk_bahan_bukti_siasatan_awam1');
		});
	}

}
