<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRefPpnTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('refPpn', function(Blueprint $table)
		{
			$table->guid('ppn_id')->primary('PK__tetapan___3213E83F2E5B3A25');
			$table->string('kod');
			$table->string('ppn');
			$table->smallInteger('papar');
			$table->dateTime('daftar_pada')->nullable();
			$table->guid('daftar_oleh')->nullable();
			$table->dateTime('kemaskini_pada')->nullable();
			$table->guid('kemaskini_oleh')->nullable();
			$table->dateTime('hapus_pada')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('refPpn');
	}

}
