<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->unsignedInteger('author_id');
			$table->string('title', 255);
			$table->longText("content");
			$table->text('excerpt');
			$table->string('image');
			// type => post | page | video | audio ...
			$table->string('type', 25);
			$table->tinyInteger('status');
			
			//slug, sluggable package

			$table->timestamps();
			$table->foreign('author_id')->references('id')->on('users');
			$table->engine = 'InnoDB';
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('posts');
	}

}