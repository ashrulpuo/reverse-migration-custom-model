<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPermohonanCalonTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('permohonanCalon', function(Blueprint $table)
		{
			$table->foreign('gelaran_id', 'FK_permohonanCalon_refGelaran')->references('gelaran_id')->on('refGelaran')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('bahagian_pilihan_raya_id', 'fk_calon_pilihan_raya_bahagian_pilihan_raya1')->references('bahagian_pilihan_raya_id')->on('bahagianPilihanRaya')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('parti_politik_id', 'fk_calon_pilihan_raya_parti_politik1')->references('parti_politik_id')->on('partiPolitik')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('alasan_id', 'fk_permohonan_calon_alasan1')->references('alasan_id')->on('refAlasan')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('users_id', 'fk_permohonan_calon_users1')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('daftar_oleh', 'permohonanCalon_FK')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('kemaskini_oleh', 'permohonanCalon_FK_1')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('permohonanCalon', function(Blueprint $table)
		{
			$table->dropForeign('FK_permohonanCalon_refGelaran');
			$table->dropForeign('fk_calon_pilihan_raya_bahagian_pilihan_raya1');
			$table->dropForeign('fk_calon_pilihan_raya_parti_politik1');
			$table->dropForeign('fk_permohonan_calon_alasan1');
			$table->dropForeign('fk_permohonan_calon_users1');
			$table->dropForeign('permohonanCalon_FK');
			$table->dropForeign('permohonanCalon_FK_1');
		});
	}

}
