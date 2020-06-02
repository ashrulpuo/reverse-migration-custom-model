<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSiasatanAwamTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('siasatanAwam', function(Blueprint $table)
		{
			$table->guid('siasiatan_awam_id')->primary('PK__siasatan__3213E83F007D936F');
			$table->date('t_siasatan');
			$table->time('masa_siasatan');
			$table->string('catatan');
			$table->string('keputusan');
			$table->string('maklumat_awam');
			$table->string('alasan_peghakiman');
			$table->guid('siasatan_id');
			$table->bigInteger('siasatan_jenis');
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
		Schema::drop('siasatanAwam');
	}

}
