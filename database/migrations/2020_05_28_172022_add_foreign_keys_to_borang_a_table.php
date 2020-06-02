<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBorangATable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('borang_a', function(Blueprint $table)
		{
			$table->foreign('bandar_id', 'FK_borang_a_refBandar')->references('bandar_id')->on('refBandar')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('bandar_id_saksi', 'FK_borang_a_refBandar1')->references('bandar_id')->on('refBandar')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('bangsa_id', 'FK_borang_a_refBangsa')->references('bangsa_id')->on('refBangsa')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('jantina_id', 'FK_borang_a_refJantina')->references('jantina_id')->on('refJantina')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('negeri_id', 'FK_borang_a_refNegeri')->references('negeri_id')->on('refNegeri')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('negeri_id_saksi', 'FK_borang_a_refNegeri1')->references('negeri_id')->on('refNegeri')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('daftar_oleh', 'borang_a_FK')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('kemaskini_oleh', 'borang_a_FK_1')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('borand_a_id', 'FK_borang_a_borang_a')->references('borand_a_id')->on('borang_a')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('orang_awam_id', 'FK_borang_a_orangAwam')->references('orang_awam_id')->on('orangAwam')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('agama_id', 'FK_borang_a_refAgama')->references('agama_id')->on('refAgama')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('kiv_alasan', 'FK_borang_a_refAlasan')->references('alasan_id')->on('refAlasan')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('tolak_alasan', 'FK_borang_a_refAlasanPenolakan')->references('alasan_penolakan_id')->on('refAlasanPenolakan')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('borang_a', function(Blueprint $table)
		{
			$table->dropForeign('FK_borang_a_refBandar');
			$table->dropForeign('FK_borang_a_refBandar1');
			$table->dropForeign('FK_borang_a_refBangsa');
			$table->dropForeign('FK_borang_a_refJantina');
			$table->dropForeign('FK_borang_a_refNegeri');
			$table->dropForeign('FK_borang_a_refNegeri1');
			$table->dropForeign('borang_a_FK');
			$table->dropForeign('borang_a_FK_1');
			$table->dropForeign('FK_borang_a_borang_a');
			$table->dropForeign('FK_borang_a_orangAwam');
			$table->dropForeign('FK_borang_a_refAgama');
			$table->dropForeign('FK_borang_a_refAlasan');
			$table->dropForeign('FK_borang_a_refAlasanPenolakan');
		});
	}

}
