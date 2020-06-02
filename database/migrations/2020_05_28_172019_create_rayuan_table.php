<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRayuanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rayuan', function(Blueprint $table)
		{
			$table->guid('rayuan_id')->primary('PK__rayuan__3213E83F4BB14293');
			$table->string('no_rujukan');
			$table->integer('status');
			$table->string('nama_pengadil');
			$table->guid('bantahan_id');
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
		Schema::drop('rayuan');
	}

}
