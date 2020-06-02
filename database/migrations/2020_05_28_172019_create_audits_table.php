<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAuditsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('audits', function(Blueprint $table)
		{
			$table->guid('audits_id')->primary('PK__audits__3213E83FC141B32E');
			$table->string('user_type')->nullable();
			$table->bigInteger('user_id')->nullable();
			$table->string('event')->nullable();
			$table->string('old_values', 1)->nullable();
			$table->string('new_values', 1)->nullable();
			$table->string('url', 1)->nullable();
			$table->string('ip_address', 45)->nullable();
			$table->string('user_agent', 1023)->nullable();
			$table->string('tags')->nullable();
			$table->string('auditable_type');
			$table->guid('auditable_id');
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
		Schema::drop('audits');
	}

}
