<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMasterAddressTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('masterAddress', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->string('alamat_asal', 45)->nullable();
			$table->string('alamat_bersih', 45)->nullable();
			$table->string('poskod', 45)->nullable();
			$table->string('bandar', 45)->nullable();
			$table->string('negeri', 45)->nullable();
			$table->integer('lokaliti_id');
			$table->string('gis_weightage', 45)->nullable();
			$table->string('gis_ketepatan', 45)->nullable();
			$table->string('gis_latitude', 45)->nullable();
			$table->string('gis_longitude', 45)->nullable();
			$table->string('gis_alamat', 45)->nullable();
			$table->string('gis_poskod', 45)->nullable();
			$table->string('gis_bandar', 45)->nullable();
			$table->string('gis_negeri', 45)->nullable();
			$table->string('gis_lokaliti', 45)->nullable();
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
		Schema::drop('masterAddress');
	}

}
