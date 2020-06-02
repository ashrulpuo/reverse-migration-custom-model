<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBahagianPilihanRayaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bahagianPilihanRaya', function(Blueprint $table)
		{
			$table->guid('bahagian_pilihan_raya_id')->primary('PK__bahagian__3213E83F64674894');
			$table->guid('pilihan_raya_id');
			$table->string('bahagian', 45)->nullable();
			$table->string('kod_bahagian', 45)->nullable();
			$table->integer('jumlah_pengundi')->nullable();
			$table->guid('petugas_id')->nullable();
			$table->dateTime('daftar_pada')->nullable();
			$table->guid('daftar_oleh')->nullable();
			$table->dateTime('kemaskini_pada')->nullable();
			$table->guid('kemaskini_oleh')->nullable();
			$table->dateTime('hapus_pada')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bahagianPilihanRaya');
	}

}
