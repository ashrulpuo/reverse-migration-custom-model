<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSejarahDpiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('sejarahDpi', function(Blueprint $table)
		{
			$table->foreign('daftar_oleh', 'sejarahDpi_FK')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('kemaskini_oleh', 'sejarahDpi_FK_1')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('sejarahDpi', function(Blueprint $table)
		{
			$table->dropForeign('sejarahDpi_FK');
			$table->dropForeign('sejarahDpi_FK_1');
		});
	}

}
