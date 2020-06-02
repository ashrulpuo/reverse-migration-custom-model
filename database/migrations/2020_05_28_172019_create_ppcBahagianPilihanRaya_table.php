<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePpcBahagianPilihanRayaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ppcBahagianPilihanRaya', function(Blueprint $table)
		{
			$table->guid('ppc_bahagian_pilihan_raya_id')->primary('PK__ppc_baha__3213E83FF5635EBE');
			$table->guid('bahagian_pilihan_raya_id');
			$table->string('nama', 45)->nullable();
			$table->string('alamat_1', 150)->nullable();
			$table->string('alamat_2', 150)->nullable();
			$table->string('alamat_3', 150)->nullable();
			$table->string('bandar', 50)->nullable();
			$table->string('poskod', 5)->nullable();
			$table->guid('negeri_id')->nullable();
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
		Schema::drop('ppcBahagianPilihanRaya');
	}

}
