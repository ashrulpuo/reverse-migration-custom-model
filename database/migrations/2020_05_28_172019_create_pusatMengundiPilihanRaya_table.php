<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePusatMengundiPilihanRayaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pusatMengundiPilihanRaya', function(Blueprint $table)
		{
			$table->guid('pusat_mengundi_pilihan_raya_id')->primary('PK__pusat_me__3213E83F9FA73CAD');
			$table->guid('bahagian_pilihan_raya_id');
			$table->guid('pusat_mengundi_id');
			$table->integer('jumlah_saluran')->nullable();
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
		Schema::drop('pusatMengundiPilihanRaya');
	}

}
