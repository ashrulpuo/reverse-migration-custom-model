<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPpcBahagianPilihanRayaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ppcBahagianPilihanRaya', function(Blueprint $table)
		{
			$table->foreign('negeri_id', 'FK_ppcBahagianPilihanRaya_refNegeri')->references('negeri_id')->on('refNegeri')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('bahagian_pilihan_raya_id', 'fk_ppc_bahagian_pilihan_raya_bahagian_pilihan_raya1')->references('bahagian_pilihan_raya_id')->on('bahagianPilihanRaya')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('daftar_oleh', 'ppcBahagianPilihanRaya_FK')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('kemaskini_oleh', 'ppcBahagianPilihanRaya_FK_1')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ppcBahagianPilihanRaya', function(Blueprint $table)
		{
			$table->dropForeign('FK_ppcBahagianPilihanRaya_refNegeri');
			$table->dropForeign('fk_ppc_bahagian_pilihan_raya_bahagian_pilihan_raya1');
			$table->dropForeign('ppcBahagianPilihanRaya_FK');
			$table->dropForeign('ppcBahagianPilihanRaya_FK_1');
		});
	}

}
