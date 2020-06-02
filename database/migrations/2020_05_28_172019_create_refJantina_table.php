<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRefJantinaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('refJantina', function(Blueprint $table)
		{
			$table->guid('jantina_id')->primary('PK__tetapan___3213E83F3A62E572');
			$table->string('kod')->nullable();
			$table->string('jantina');
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
		Schema::drop('refJantina');
	}

}
