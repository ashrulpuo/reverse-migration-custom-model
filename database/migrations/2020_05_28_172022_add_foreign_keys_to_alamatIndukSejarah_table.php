<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAlamatIndukSejarahTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('alamatIndukSejarah', function(Blueprint $table)
		{
			$table->foreign('daftar_oleh', 'alamatIndukSejarah_FK')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('kemaskini_oleh', 'alamatIndukSejarah_FK_1')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('alamat_induk_id', 'fk_alamat_induk_sejarah_alamat_induk1')->references('lokaliti_id')->on('lokaliti')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('alamatIndukSejarah', function(Blueprint $table)
		{
			$table->dropForeign('alamatIndukSejarah_FK');
			$table->dropForeign('alamatIndukSejarah_FK_1');
			$table->dropForeign('fk_alamat_induk_sejarah_alamat_induk1');
		});
	}

}
