<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToOrangAwamTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('orangAwam', function(Blueprint $table)
		{
			$table->foreign('orang_awam_id', 'FK_orangAwam_orangAwam')->references('orang_awam_id')->on('orangAwam')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('alasan_kiv', 'FK_orangAwam_refAlasan')->references('alasan_id')->on('refAlasan')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('alasan_tolak', 'FK_orangAwam_refAlasanPenolakan')->references('alasan_penolakan_id')->on('refAlasanPenolakan')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('bandar_id', 'FK_orangAwam_refBandar')->references('bandar_id')->on('refBandar')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('negara_id', 'FK_orangAwam_refNegara')->references('negara_id')->on('refNegara')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('negeri_id', 'FK_orangAwam_refNegeri')->references('negeri_id')->on('refNegeri')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('soalan_keselamatan_id', 'FK_orangAwam_soalanKeselamatan')->references('soalan_keselamatan_id')->on('soalanKeselamatan')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('users_id', 'fk_orang_awam_users1')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('daftar_oleh', 'orangAwam_FK')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('kemaskini_oleh', 'orangAwam_FK_1')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('orangAwam', function(Blueprint $table)
		{
			$table->dropForeign('FK_orangAwam_orangAwam');
			$table->dropForeign('FK_orangAwam_refAlasan');
			$table->dropForeign('FK_orangAwam_refAlasanPenolakan');
			$table->dropForeign('FK_orangAwam_refBandar');
			$table->dropForeign('FK_orangAwam_refNegara');
			$table->dropForeign('FK_orangAwam_refNegeri');
			$table->dropForeign('FK_orangAwam_soalanKeselamatan');
			$table->dropForeign('fk_orang_awam_users1');
			$table->dropForeign('orangAwam_FK');
			$table->dropForeign('orangAwam_FK_1');
		});
	}

}
