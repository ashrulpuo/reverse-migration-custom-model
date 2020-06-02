<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePetugasSaluranTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('petugasSaluran', function(Blueprint $table)
		{
			$table->guid('petugas_saluran_id')->primary('PK_petugasSaluran');
			$table->guid('petugas_pilihan_raya_id');
			$table->guid('jawatan_petugas_pilihan_raya_id');
			$table->guid('bahagian_pilihan_raya_id');
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
		Schema::drop('petugasSaluran');
	}

}
