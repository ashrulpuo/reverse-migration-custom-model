<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePenolongPendaftarTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('penolongPendaftar', function(Blueprint $table)
		{
			$table->guid('penolong_pendaftar_id')->primary('PK__penolong__3213E83FE788DC07');
			$table->guid('bandar_id')->nullable();
			$table->guid('negeri_id')->nullable();
			$table->guid('organisasi_id')->nullable();
			$table->char('organisasi_type', 10)->nullable();
			$table->string('nama', 250)->nullable();
			$table->string('no_kp', 12)->nullable();
			$table->string('alamat1', 250)->nullable();
			$table->string('alamat2', 250)->nullable();
			$table->string('alamat3', 250)->nullable();
			$table->string('poskod', 5)->nullable();
			$table->string('emel', 45)->nullable();
			$table->string('no_tel', 45)->nullable();
			$table->integer('kategori')->nullable();
			$table->integer('status')->nullable();
			$table->date('t_lulus')->nullable();
			$table->date('t_pohon')->nullable();
			$table->string('nama_bank', 45)->nullable();
			$table->string('no_akaun', 45)->nullable();
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
		Schema::drop('penolongPendaftar');
	}

}
