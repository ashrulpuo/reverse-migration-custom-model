<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDpiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dpi', function(Blueprint $table)
		{
			$table->guid('dpi_id')->primary('PK__pemilih__3213E83F840676A7');
			$table->guid('agama_id')->nullable();
			$table->guid('bangsa_id')->nullable();
			$table->guid('jantina_id')->nullable();
			$table->guid('lokaliti_id');
			$table->guid('negeri_id')->nullable();
			$table->guid('warta_id');
			$table->guid('alasan_potong_id')->nullable();
			$table->guid('alamat_induk_id');
			$table->string('no_kp', 45)->nullable();
			$table->string('no_personel', 45)->nullable();
			$table->string('jenis_kp', 45)->nullable();
			$table->string('nama', 45)->nullable();
			$table->string('alamat1', 45)->nullable();
			$table->string('alamat2', 45)->nullable();
			$table->string('alamat3', 45)->nullable();
			$table->string('poskod', 45)->nullable();
			$table->string('bandar', 45)->nullable();
			$table->softDeletes();
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
		Schema::drop('dpi');
	}

}
