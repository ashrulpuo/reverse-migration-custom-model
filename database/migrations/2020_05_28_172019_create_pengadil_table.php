<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePengadilTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pengadil', function(Blueprint $table)
		{
			$table->guid('pengadil_id')->primary('PK__pengadil__3213E83F9B13FE05');
			$table->string('nama', 150)->nullable();
			$table->string('no_kp', 12)->nullable();
			$table->date('t_lahir')->nullable();
			$table->string('jawatan', 45)->nullable();
			$table->string('gred', 45)->nullable();
			$table->date('t_lapor_diri')->nullable();
			$table->string('no_tel_pejabat', 45)->nullable();
			$table->date('t_permohonan')->nullable();
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
		Schema::drop('pengadil');
	}

}
