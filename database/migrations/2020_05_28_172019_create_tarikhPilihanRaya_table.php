<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTarikhPilihanRayaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tarikhPilihanRaya', function(Blueprint $table)
		{
			$table->guid('tarikh_pilihan_raya_id')->primary('PK__tarikh_p__3213E83FBA6C96D2');
			$table->guid('pilihan_raya_id');
			$table->guid('peristiwa_id');
			$table->date('tarikh_mula')->nullable();
			$table->date('tarikh_tamat')->nullable();
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
		Schema::drop('tarikhPilihanRaya');
	}

}
