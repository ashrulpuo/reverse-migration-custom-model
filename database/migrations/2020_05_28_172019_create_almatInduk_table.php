<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAlmatIndukTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('almatInduk', function(Blueprint $table)
		{
			$table->guid('alamat_induk_id')->primary('PK__alamat_i__3213E83F42101277');
			$table->guid('lokaliti_id');
			$table->string('alamat_asal');
			$table->string('alamat_bersih');
			$table->string('poskod', 5);
			$table->string('bandar', 50);
			$table->string('negeri', 50);
			$table->string('gis_weightage');
			$table->string('gis_ketepatan');
			$table->string('gis_latitude');
			$table->string('gis_longitude');
			$table->string('gis_alamat');
			$table->string('gis_poskod');
			$table->string('gis_bandar');
			$table->string('gis_negeri');
			$table->integer('gis_lokaliti_id');
			$table->dateTime('hapus_pada')->nullable();
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
		Schema::drop('almatInduk');
	}

}
