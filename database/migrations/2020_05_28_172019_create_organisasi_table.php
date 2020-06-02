<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrganisasiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('organisasi', function(Blueprint $table)
		{
			$table->guid('organisasi_id')->primary('PK__organisa__3213E83F42128C8F');
			$table->string('nama', 45)->nullable();
			$table->string('alamat1', 45)->nullable();
			$table->string('alamat2', 45)->nullable();
			$table->string('alamat3', 45)->nullable();
			$table->string('poskod', 45)->nullable();
			$table->integer('kodnegeri')->nullable();
			$table->string('no_pendaftaran', 45)->nullable();
			$table->string('kategori', 45)->nullable();
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
		Schema::drop('organisasi');
	}

}
