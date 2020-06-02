<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRefAlasanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('refAlasan', function(Blueprint $table)
		{
			$table->guid('alasan_id')->primary('PK__alasan__3213E83F107556C3');
			$table->string('alasan', 250);
			$table->string('jenis', 10);
			$table->softDeletes();
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
		Schema::drop('refAlasan');
	}

}
