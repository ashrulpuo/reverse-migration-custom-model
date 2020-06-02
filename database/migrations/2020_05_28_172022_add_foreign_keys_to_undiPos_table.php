<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUndiPosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('undiPos', function(Blueprint $table)
		{
			$table->foreign('kategori_undi_pos_id', 'fk_undi_pos_kategori_undi_pos1')->references('kategori_undi_pos_id')->on('kategoriUndiPos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('orang_awam_id', 'fk_undi_pos_orang_awam1')->references('orang_awam_id')->on('orangAwam')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('daftar_oleh', 'undiPos_FK')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('kemaskini_oleh', 'undiPos_FK_1')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('undiPos', function(Blueprint $table)
		{
			$table->dropForeign('fk_undi_pos_kategori_undi_pos1');
			$table->dropForeign('fk_undi_pos_orang_awam1');
			$table->dropForeign('undiPos_FK');
			$table->dropForeign('undiPos_FK_1');
		});
	}

}
