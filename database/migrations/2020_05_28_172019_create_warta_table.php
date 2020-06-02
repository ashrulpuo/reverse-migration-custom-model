<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWartaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('warta', function(Blueprint $table)
		{
			$table->guid('warta_id')->primary('PK__warta__3213E83F2691003B');
			$table->string('tarikh_mulan_rang', 45)->nullable();
			$table->string('tarikh_tamat_rang', 45)->nullable();
			$table->string('nama_rang', 45)->nullable();
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
		Schema::drop('warta');
	}

}
