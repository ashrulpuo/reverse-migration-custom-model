<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAlamatIndukSejarahTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('alamatIndukSejarah', function(Blueprint $table)
		{
			$table->uuid('alamat_induk_sejarah_id')->primary('PK_alamatIndukSejarah');
			$table->uuid('alamat_induk_id');
			$table->integer('lokaliti_id');
			$table->softDeletes();
			$table->dateTime('daftar_pada')->nullable();
			$table->uuid('daftar_oleh')->nullable();
			$table->dateTime('kemaskini_pada')->nullable();
			$table->uuid('kemaskini_oleh')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('alamatIndukSejarah');
	}

}
