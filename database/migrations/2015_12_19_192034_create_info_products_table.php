<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfoProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('info_products', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name',250)->nullable();
			$table->string('filename',250);
			$table->string('type',100);
			$table->string('type_full',100);
			$table->string('link',250)->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('info_products');
	}

}
