<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTransaksiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('transaksi', function(Blueprint $table)
		{
			$table->guid('id')->primary('PK__transaks__3213E83F3925052E');
			$table->string('nama', 45)->nullable();
			$table->string('confident_lokaliti', 45)->nullable();
			$table->string('lokaliti_id', 45)->nullable();
			$table->string('tranksaksicol', 45)->nullable();
			$table->string('confident_alamat', 45)->nullable();
			$table->string('confident_gis', 45)->nullable();
			$table->date('tarikh_lahir')->nullable();
			$table->string('no_kp', 45)->nullable();
			$table->integer('status')->nullable();
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
		Schema::drop('transaksi');
	}

}
