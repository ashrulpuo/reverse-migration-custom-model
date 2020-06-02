<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPermohonanPetugasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('permohonanPetugas', function(Blueprint $table)
		{
			$table->foreign('negeri_id', 'FK_permohonanPetugas_refNegeri')->references('negeri_id')->on('refNegeri')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('dun_id', 'fk_permohonan_petugas_pilihan_raya_dun1')->references('id')->on('dun')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('jawatan_petugas_pilihan_raya_id', 'fk_permohonan_petugas_pilihan_raya_jawatan_petugas_pilihan_ra1')->references('jawatan_petugas_id')->on('jawatanPetugas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('orang_awam_id', 'fk_permohonan_petugas_pilihan_raya_orang_awam1')->references('orang_awam_id')->on('orangAwam')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('parlimen_id', 'fk_permohonan_petugas_pilihan_raya_parlimen1')->references('id')->on('parlimen')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('daftar_oleh', 'permohonanPetugas_FK')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('kemaskini_oleh', 'permohonanPetugas_FK_1')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('permohonanPetugas', function(Blueprint $table)
		{
			$table->dropForeign('FK_permohonanPetugas_refNegeri');
			$table->dropForeign('fk_permohonan_petugas_pilihan_raya_dun1');
			$table->dropForeign('fk_permohonan_petugas_pilihan_raya_jawatan_petugas_pilihan_ra1');
			$table->dropForeign('fk_permohonan_petugas_pilihan_raya_orang_awam1');
			$table->dropForeign('fk_permohonan_petugas_pilihan_raya_parlimen1');
			$table->dropForeign('permohonanPetugas_FK');
			$table->dropForeign('permohonanPetugas_FK_1');
		});
	}

}
