<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBahanBuktiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bahanBukti', function(Blueprint $table)
		{
			$table->guid('bahan_bukti_id')->primary('PK__bahan_bu__3213E83F6A47D3D5');
			$table->string('nama_dokumen');
			$table->guid('siasatan_awam_id');
			$table->integer('bahan_bukti_okb');
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
		Schema::drop('bahanBukti');
	}

}
