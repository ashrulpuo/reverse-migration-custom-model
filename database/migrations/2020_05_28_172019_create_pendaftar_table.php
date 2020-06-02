<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePendaftarTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pendaftar', function(Blueprint $table)
		{
			$table->guid('pendaftar_id')->primary('PK__pendafta__3213E83F6AB4E0B3');
			$table->string('nama', 250)->nullable();
			$table->string('jawatan', 45)->nullable();
			$table->string('gred', 45)->nullable();
			$table->date('t_permohonan')->nullable();
			$table->date('t_lapor_diri')->nullable();
			$table->integer('status')->nullable();
			$table->integer('jawatan_pendaftar')->nullable();
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
		Schema::drop('pendaftar');
	}

}
