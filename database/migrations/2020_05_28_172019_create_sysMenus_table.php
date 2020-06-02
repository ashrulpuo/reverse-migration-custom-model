<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSysMenusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sysMenus', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->bigInteger('routes_id')->nullable();
			$table->string('menu', 45)->nullable();
			$table->string('parent', 45)->nullable();
			$table->integer('type')->nullable();
			$table->string('icon', 45)->nullable();
			$table->integer('sort')->nullable();
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
		Schema::drop('sysMenus');
	}

}
