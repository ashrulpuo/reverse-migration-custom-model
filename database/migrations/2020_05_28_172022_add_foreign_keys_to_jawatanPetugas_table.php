<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToJawatanPetugasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('jawatanPetugas', function(Blueprint $table)
		{
			$table->foreign('daftar_oleh', 'jawatanPetugas_FK')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('kemaskini_oleh', 'jawatanPetugas_FK_1')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('jawatanPetugas', function(Blueprint $table)
		{
			$table->dropForeign('jawatanPetugas_FK');
			$table->dropForeign('jawatanPetugas_FK_1');
		});
	}

}
