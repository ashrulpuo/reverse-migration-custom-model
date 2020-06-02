<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTaklimatTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('taklimat', function(Blueprint $table)
		{
			$table->guid('taklimat_id')->primary('PK__taklimat__3213E83FC3B1CBA9');
			$table->date('t_taklimat')->nullable();
			$table->string('masa', 45)->nullable();
			$table->string('tempat', 45)->nullable();
			$table->string('no_tel', 45)->nullable();
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
		Schema::drop('taklimat');
	}

}
