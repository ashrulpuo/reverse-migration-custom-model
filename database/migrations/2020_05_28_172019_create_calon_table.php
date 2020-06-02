<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCalonTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('calon', function(Blueprint $table)
		{
			$table->guid('calon_id')->primary('PK__calon__3213E83F051B6FFB');
			$table->guid('permohonan_calon_id');
			$table->string('nama_kertas_undi', 45)->nullable();
			$table->integer('aturan')->nullable();
			$table->integer('jumlah_undi')->nullable();
			$table->string('status', 45)->nullable();
			$table->integer('status_bayaran_permit')->nullable();
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
		Schema::drop('calon');
	}

}
