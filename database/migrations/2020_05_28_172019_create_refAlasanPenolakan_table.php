<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRefAlasanPenolakanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('refAlasanPenolakan', function(Blueprint $table)
		{
			$table->guid('alasan_penolakan_id')->primary('PK__tetapan___3213E83F0C786AE0');
			$table->string('code')->nullable();
			$table->string('keterangan');
			$table->smallInteger('papar');
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
		Schema::drop('refAlasanPenolakan');
	}

}
