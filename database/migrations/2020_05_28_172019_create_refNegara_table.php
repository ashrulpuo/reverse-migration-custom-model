<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRefNegaraTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('refNegara', function(Blueprint $table)
		{
			$table->guid('negara_id')->primary('PK__tetapan___3213E83F49D358BD');
			$table->string('kod')->nullable();
			$table->string('negara');
			$table->string('kod_tel')->nullable();
			$table->string('rujukan_myidentity')->nullable();
			$table->smallInteger('papar');
			$table->dateTime('daftar_pada')->nullable();
			$table->guid('daftar_oleh')->nullable();
			$table->dateTime('kemaskini_pada')->nullable();
			$table->guid('kemaskini_oleh')->nullable();
			$table->char('hapus_pada', 10)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('refNegara');
	}

}
