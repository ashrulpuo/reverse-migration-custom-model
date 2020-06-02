<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWargaSprTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wargaSpr', function(Blueprint $table)
		{
			$table->guid('id')->primary('PK__warga_sp__3213E83F50B40ABD');
			$table->guid('jawatan_id')->nullable();
			$table->guid('ppn_id')->nullable();
			$table->guid('users_id');
			$table->string('nama', 45)->nullable();
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
		Schema::drop('wargaSpr');
	}

}
