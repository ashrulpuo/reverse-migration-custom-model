<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJawatanPetugasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('jawatanPetugas', function(Blueprint $table)
		{
			$table->guid('jawatan_petugas_id')->primary('PK__jawatan___3213E83FEA047A52');
			$table->string('jawatan', 45)->nullable();
			$table->integer('lantikan')->nullable();
			$table->float('kadar_elaun', 53, 0)->nullable();
			$table->integer('watikah')->nullable();
			$table->softDeletes();
			$table->string('konfigurasi_petugas_pilihan_rayacol', 45)->nullable();
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
		Schema::drop('jawatanPetugas');
	}

}
