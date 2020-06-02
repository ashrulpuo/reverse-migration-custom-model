<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRefBandarTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('refBandar', function(Blueprint $table)
		{
			$table->guid('bandar_id')->primary('PK__tetapan___3213E83FEA07B40D');
			$table->string('kod')->nullable();
			$table->string('bandar');
			$table->smallInteger('papar');
			$table->dateTime('daftar_pada')->nullable();
			$table->guid('daftar_oleh')->nullable();
			$table->dateTime('kemaskini_pada')->nullable();
			$table->guid('kemaskini_oleh')->nullable();
			$table->char('hapus_pada', 10)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('refBandar');
	}

}
