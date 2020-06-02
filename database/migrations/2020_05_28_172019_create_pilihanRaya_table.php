<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePilihanRayaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pilihanRaya', function(Blueprint $table)
		{
			$table->guid('pilihan_raya_id')->primary('PK__pilihan___3213E83F2D551D51');
			$table->string('nama', 150)->nullable();
			$table->string('kod', 45)->nullable();
			$table->integer('mode')->nullable();
			$table->integer('jenis_pilihan_raya')->nullable();
			$table->integer('jumlah_pemilih')->nullable();
			$table->integer('status')->nullable();
			$table->dateTime('hapus_pada')->nullable();
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
		Schema::drop('pilihanRaya');
	}

}
