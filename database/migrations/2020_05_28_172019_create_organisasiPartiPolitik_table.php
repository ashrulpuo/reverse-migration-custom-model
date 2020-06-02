<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrganisasiPartiPolitikTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('organisasiPartiPolitik', function(Blueprint $table)
		{
			$table->guid('organisasi_parti_politik_id')->primary('PK__organisa__3213E83FC62B7911');
			$table->string('nama', 45)->nullable();
			$table->integer('jawatan_id')->nullable();
			$table->guid('parti_politik_id');
			$table->softDeletes();
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
		Schema::drop('organisasiPartiPolitik');
	}

}
