<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPergerakanKertasSprTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pergerakanKertasSpr', function(Blueprint $table)
		{
			$table->foreign('pergerakan_id', 'fk_pergerakan_kertas_spr_pendaftar1')->references('pendaftar_id')->on('pendaftar')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('pergerakan_id', 'fk_pergerakan_kertas_spr_pengadil1')->references('pengadil_id')->on('pengadil')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('pergerakan_id', 'fk_pergerakan_kertas_spr_penolong_pendaftar1')->references('penolong_pendaftar_id')->on('penolongPendaftar')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('daftar_oleh', 'pergerakanKertasSpr_FK')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('kemaskini_oleh', 'pergerakanKertasSpr_FK_1')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pergerakanKertasSpr', function(Blueprint $table)
		{
			$table->dropForeign('fk_pergerakan_kertas_spr_pendaftar1');
			$table->dropForeign('fk_pergerakan_kertas_spr_pengadil1');
			$table->dropForeign('fk_pergerakan_kertas_spr_penolong_pendaftar1');
			$table->dropForeign('pergerakanKertasSpr_FK');
			$table->dropForeign('pergerakanKertasSpr_FK_1');
		});
	}

}
