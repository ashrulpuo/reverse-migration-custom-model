<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSejarahDpiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sejarahDpi', function(Blueprint $table)
		{
			$table->guid('sejarah_dpi_id')->primary('PK__sejarah___3213E83F88D151C3');
			$table->integer('pemilih_id');
			$table->string('jenis_perubahan', 45)->nullable();
			$table->string('nama', 45)->nullable();
			$table->string('jantina', 45)->nullable();
			$table->string('agama', 45)->nullable();
			$table->string('kaum', 45)->nullable();
			$table->string('lakiliti_id', 45)->nullable();
			$table->string('lokaliti', 45)->nullable();
			$table->string('dm_id', 45)->nullable();
			$table->string('dm', 45)->nullable();
			$table->string('dun_id', 45)->nullable();
			$table->string('dun', 45)->nullable();
			$table->string('no_kp', 45)->nullable();
			$table->string('nk_kp_lama', 45)->nullable();
			$table->string('no_kp_polis', 45)->nullable();
			$table->string('no_kp_tentera', 45)->nullable();
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
		Schema::drop('sejarahDpi');
	}

}
