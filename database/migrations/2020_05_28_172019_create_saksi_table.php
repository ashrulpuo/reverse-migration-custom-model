<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSaksiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('saksi', function(Blueprint $table)
		{
			$table->guid('saksi_id')->primary('PK__saksi__3213E83FC9A5E7BF');
			$table->string('nama');
			$table->string('no_kp');
			$table->integer('saksi_okb');
			$table->string('saksicol');
			$table->guid('siasatan_awam_id');
			$table->dateTime('daftar_pada')->nullable();
			$table->guid('daftar_oleh')->nullable();
			$table->dateTime('kemaskini_pada')->nullable();
			$table->guid('kemaskini_oleh')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('saksi');
	}

}
