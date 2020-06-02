<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKategoriUndiPosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kategoriUndiPos', function(Blueprint $table)
		{
			$table->guid('kategori_undi_pos_id')->primary('PK__jawatan___3213E83F99EB45EE');
			$table->string('nama', 45)->nullable();
			$table->string('kod', 45)->nullable();
			$table->bigInteger('konfigurasi_undi_pos_id');
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
		Schema::drop('kategoriUndiPos');
	}

}
