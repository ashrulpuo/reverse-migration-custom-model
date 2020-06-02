<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKonfigurasiWatikahTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('konfigurasiWatikah', function(Blueprint $table)
		{
			$table->guid('konfigurasi_watikah_id')->primary('PK__konfigur__3213E83F1B14E19E');
			$table->string('nama_ydp', 45)->nullable();
			$table->string('nama_pm', 45)->nullable();
			$table->string('gelaran_ydp', 45)->nullable();
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
		Schema::drop('konfigurasiWatikah');
	}

}
