<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCalonTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('calon', function(Blueprint $table)
		{
			$table->foreign('daftar_oleh', 'calon_FK')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('kemaskini_oleh', 'calon_FK_1')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('permohonan_calon_id', 'fk_calon_permohonan_calon1')->references('permohonan_calon_id')->on('permohonanCalon')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('calon', function(Blueprint $table)
		{
			$table->dropForeign('calon_FK');
			$table->dropForeign('calon_FK_1');
			$table->dropForeign('fk_calon_permohonan_calon1');
		});
	}

}
