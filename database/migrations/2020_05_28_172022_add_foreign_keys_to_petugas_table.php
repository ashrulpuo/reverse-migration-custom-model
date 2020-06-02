<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPetugasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('petugas', function(Blueprint $table)
		{
			$table->foreign('negeri_id', 'FK_petugas_permohonanPetugas')->references('negeri_id')->on('refNegeri')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('jawatan_petugas_id', 'FK_petugas_petugas')->references('jawatan_petugas_id')->on('jawatanPetugas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('id', 'FK_petugas_petugas1')->references('id')->on('petugas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('pilihan_raya_id', 'fk_petugas_pilihan_raya_pilihan_raya1')->references('pilihan_raya_id')->on('pilihanRaya')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('daftar_oleh', 'petugas_FK')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('kemaskini_oleh', 'petugas_FK_1')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('petugas', function(Blueprint $table)
		{
			$table->dropForeign('FK_petugas_permohonanPetugas');
			$table->dropForeign('FK_petugas_petugas');
			$table->dropForeign('FK_petugas_petugas1');
			$table->dropForeign('fk_petugas_pilihan_raya_pilihan_raya1');
			$table->dropForeign('petugas_FK');
			$table->dropForeign('petugas_FK_1');
		});
	}

}
