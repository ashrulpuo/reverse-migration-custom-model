<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSysModuleRoutesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sysModuleRoutes', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->bigInteger('modules_id');
			$table->bigInteger('routes_id');
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
		Schema::drop('sysModuleRoutes');
	}

}
