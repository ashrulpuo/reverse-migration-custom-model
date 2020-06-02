<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePartiPolitikTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('partiPolitik', function(Blueprint $table)
		{
			$table->guid('parti_politik_id')->primary('PK__parti_po__3213E83FF04617EB');
			$table->guid('negeri_id')->nullable();
			$table->string('nama', 45)->nullable();
			$table->string('singkatan', 45)->nullable();
			$table->string('no_pendaftaran', 45)->nullable();
			$table->string('alamat1', 45)->nullable();
			$table->string('alamat2', 45)->nullable();
			$table->string('alamat3', 45)->nullable();
			$table->string('poskod', 45)->nullable();
			$table->integer('status')->nullable();
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
		Schema::drop('partiPolitik');
	}

}
