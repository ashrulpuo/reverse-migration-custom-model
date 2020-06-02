<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSaluranMengundiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('saluranMengundi', function(Blueprint $table)
		{
			$table->guid('saluran_mengundi_id')->primary('PK__saluran___3213E83F963DAEAA');
			$table->string('nama', 100)->nullable();
			$table->integer('jumlah_pengundi')->nullable();
			$table->guid('pusat_mengundi_pilihan_raya_id');
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
		Schema::drop('saluranMengundi');
	}

}
