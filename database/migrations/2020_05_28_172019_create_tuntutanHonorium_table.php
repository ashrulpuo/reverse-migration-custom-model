<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTuntutanHonoriumTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tuntutanHonorium', function(Blueprint $table)
		{
			$table->guid('tuntutan_honorium_id')->primary('PK__tuntutan__3213E83F9141ACE6');
			$table->string('no_siri', 45)->nullable();
			$table->integer('jumlah_borang')->nullable();
			$table->float('jumlah_tuntutan', 53, 0)->nullable();
			$table->date('t_bayaran')->nullable();
			$table->integer('status')->nullable();
			$table->guid('penolong_pendaftar_id');
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
		Schema::drop('tuntutanHonorium');
	}

}
