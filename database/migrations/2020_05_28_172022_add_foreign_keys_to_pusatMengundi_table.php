<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPusatMengundiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pusatMengundi', function(Blueprint $table)
		{
			$table->foreign('negeri_id', 'FK_pusatMengundi_refNegeri')->references('negeri_id')->on('refNegeri')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('daftar_oleh', 'pusatMengundi_FK')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('kemaskini_oleh', 'pusatMengundi_FK_1')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pusatMengundi', function(Blueprint $table)
		{
			$table->dropForeign('FK_pusatMengundi_refNegeri');
			$table->dropForeign('pusatMengundi_FK');
			$table->dropForeign('pusatMengundi_FK_1');
		});
	}

}
