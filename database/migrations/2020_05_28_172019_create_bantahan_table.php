<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBantahanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bantahan', function(Blueprint $table)
		{
			$table->guid('bantahan_id')->primary('PK__bantahan__3213E83FA83A52DE');
			$table->string('nama');
			$table->string('no_kp');
			$table->string('jenis_kp');
			$table->string('no_tel');
			$table->string('no_tel_bimbit');
			$table->string('alamat1');
			$table->string('alamat2');
			$table->string('alamat3');
			$table->string('bandar');
			$table->string('poskod');
			$table->string('negeri');
			$table->date('t_bantahan');
			$table->string('nama_okb');
			$table->string('no_kp_okb');
			$table->string('alasan_bantahan');
			$table->string('no_bantahan');
			$table->integer('bayaran');
			$table->integer('status');
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
		Schema::drop('bantahan');
	}

}
