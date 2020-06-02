<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePergerakanKertasSprTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pergerakanKertasSpr', function(Blueprint $table)
		{
			$table->guid('pergerakan_kertas_spr_id')->primary('PK__pergerak__3213E83FFC8DB58C');
			$table->string('nama', 45)->nullable();
			$table->string('no_bilangan_kertas', 45)->nullable();
			$table->string('t_edar_kertas', 45)->nullable();
			$table->string('no_bil_mesyuarat', 45)->nullable();
			$table->string('no_rujukan_fail', 45)->nullable();
			$table->integer('status')->nullable();
			$table->date('t_status')->nullable();
			$table->string('catatan', 45)->nullable();
			$table->string('pergerakan_type');
			$table->guid('pergerakan_id');
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
		Schema::drop('pergerakanKertasSpr');
	}

}
