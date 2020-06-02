<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPetugasSaluranTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('petugasSaluran', function(Blueprint $table)
		{
			$table->foreign('jawatan_petugas_pilihan_raya_id', 'fk_petugas_pilihan_raya_bahagian_pilihan_raya_jawatan_petugas1')->references('jawatan_petugas_id')->on('jawatanPetugas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('petugas_pilihan_raya_id', 'fk_petugas_pilihan_raya_bahagian_pilihan_raya_petugas_pilihan1')->references('id')->on('petugas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('bahagian_pilihan_raya_id', 'fk_petugas_saluran_pilihan_raya_bahagian_pilihan_raya1')->references('bahagian_pilihan_raya_id')->on('bahagianPilihanRaya')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('daftar_oleh', 'petugasSaluran_FK')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('kemaskini_oleh', 'petugasSaluran_FK_1')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('petugasSaluran', function(Blueprint $table)
		{
			$table->dropForeign('fk_petugas_pilihan_raya_bahagian_pilihan_raya_jawatan_petugas1');
			$table->dropForeign('fk_petugas_pilihan_raya_bahagian_pilihan_raya_petugas_pilihan1');
			$table->dropForeign('fk_petugas_saluran_pilihan_raya_bahagian_pilihan_raya1');
			$table->dropForeign('petugasSaluran_FK');
			$table->dropForeign('petugasSaluran_FK_1');
		});
	}

}
