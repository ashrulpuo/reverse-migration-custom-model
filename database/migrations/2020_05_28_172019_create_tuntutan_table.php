<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTuntutanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tuntutan', function(Blueprint $table)
		{
			$table->guid('tuntutan_id')->primary('PK__tuntutan__3213E83FFA3A1D5E');
			$table->string('nama', 45)->nullable();
			$table->string('no_kp', 45)->nullable();
			$table->string('no_tel', 45)->nullable();
			$table->string('emel', 45)->nullable();
			$table->string('no_rujukan', 45)->nullable();
			$table->dateTime('modified_at')->nullable();
			$table->integer('status')->nullable();
			$table->string('catan', 45)->nullable();
			$table->bigInteger('di_semak _oleh')->nullable();
			$table->dateTime('di_semak_pada')->nullable();
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
		Schema::drop('tuntutan');
	}

}
