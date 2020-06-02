<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKonfigurasiUndiPosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('konfigurasiUndiPos', function(Blueprint $table)
		{
			$table->guid('konfigurasi_undi_pos_id')->primary('PK__kategori__3213E83FF11A76A7');
			$table->string('nama', 45);
			$table->string('keterangan', 45)->nullable();
			$table->softDeletes();
			$table->date('t_buka')->nullable();
			$table->date('t_tutup')->nullable();
			$table->integer('aktif')->nullable();
			$table->string('dokumen_sokongan');
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
		Schema::drop('konfigurasiUndiPos');
	}

}
