<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToKategoriUndiPosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('kategoriUndiPos', function(Blueprint $table)
		{
			$table->foreign('kategori_undi_pos_id', 'FK_kategoriUndiPos_konfigurasiUndiPos')->references('konfigurasi_undi_pos_id')->on('konfigurasiUndiPos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('daftar_oleh', 'kategoriUndiPos_FK')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('kemaskini_oleh', 'kategoriUndiPos_FK_1')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('kategoriUndiPos', function(Blueprint $table)
		{
			$table->dropForeign('FK_kategoriUndiPos_konfigurasiUndiPos');
			$table->dropForeign('kategoriUndiPos_FK');
			$table->dropForeign('kategoriUndiPos_FK_1');
		});
	}

}
