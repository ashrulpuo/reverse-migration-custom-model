<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRayuanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('rayuan', function(Blueprint $table)
		{
			$table->foreign('bantahan_id', 'fk_rayuan_bantahan1')->references('bantahan_id')->on('bantahan')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('daftar_oleh', 'rayuan_FK')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('kemaskini_oleh', 'rayuan_FK_1')->references('pengguna_id')->on('pengguna')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('rayuan', function(Blueprint $table)
		{
			$table->dropForeign('fk_rayuan_bantahan1');
			$table->dropForeign('rayuan_FK');
			$table->dropForeign('rayuan_FK_1');
		});
	}

}
