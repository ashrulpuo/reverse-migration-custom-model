<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSejarahDpprTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sejarahDppr', function(Blueprint $table)
		{
			$table->guid('sejarah_id')->primary('PK__sejarah___3213E83FC487D002');
			$table->guid('pilihan_raya_id');
			$table->string('no_siri', 45)->nullable();
			$table->string('no_saluran', 45)->nullable();
			$table->string('nama', 45)->nullable();
			$table->string('no_kp', 14)->nullable();
			$table->string('no_kp_lama', 45)->nullable();
			$table->string('jenis_kp', 10)->nullable();
			$table->string('no_personel', 45)->nullable();
			$table->string('t_lahir', 8)->nullable();
			$table->integer('oku')->nullable();
			$table->string('nama_par', 45)->nullable();
			$table->integer('dun_id');
			$table->string('dun', 45)->nullable();
			$table->string('daerah_mengundi', 45)->nullable();
			$table->string('lakaliti', 45)->nullable();
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
		Schema::drop('sejarahDppr');
	}

}
