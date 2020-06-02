<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDmTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dm', function(Blueprint $table)
		{
			$table->guid('dm_id')->primary('PK__daerah_m__3213E83FF643BE21');
			$table->guid('dun_id');
			$table->string('kod_dm', 45)->nullable();
			$table->string('dm', 45)->nullable();
			$table->softDeletes();
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
		Schema::drop('dm');
	}

}
