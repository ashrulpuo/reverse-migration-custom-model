<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToParlimenTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('parlimen', function(Blueprint $table)
		{
			$table->foreign('negeri_id', 'FK_parlimen_refNegeri')->references('negeri_id')->on('refNegeri')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('daftar_oleh', 'parlimen_FK')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('kemaskini_oleh', 'parlimen_FK_1')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('parlimen', function(Blueprint $table)
		{
			$table->dropForeign('FK_parlimen_refNegeri');
			$table->dropForeign('parlimen_FK');
			$table->dropForeign('parlimen_FK_1');
		});
	}

}
