<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePusatMengundiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pusatMengundi', function(Blueprint $table)
		{
			$table->guid('pusat_mengundi_id')->primary('PK__pusat_me__3213E83F46B1C3A5');
			$table->string('nama', 150)->nullable();
			$table->string('alamat_1', 250)->nullable();
			$table->string('alamat_2', 250);
			$table->string('alamat_3', 250)->nullable();
			$table->string('poskod', 45)->nullable();
			$table->string('bandar', 50)->nullable();
			$table->guid('negeri_id')->nullable();
			$table->float('lat', 53, 0)->nullable();
			$table->float('lon', 53, 0)->nullable();
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
		Schema::drop('pusatMengundi');
	}

}
