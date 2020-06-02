<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPartiPolitikTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('partiPolitik', function(Blueprint $table)
		{
			$table->foreign('negeri_id', 'FK_partiPolitik_partiPolitik')->references('negeri_id')->on('refNegeri')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('daftar_oleh', 'partiPolitik_FK')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('kemaskini_oleh', 'partiPolitik_FK_1')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('partiPolitik', function(Blueprint $table)
		{
			$table->dropForeign('FK_partiPolitik_partiPolitik');
			$table->dropForeign('partiPolitik_FK');
			$table->dropForeign('partiPolitik_FK_1');
		});
	}

}
