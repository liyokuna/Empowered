<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocialLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_links', function (Blueprint $table) {
            $table->increments('id');
			$table->text('facebook');
			$table->text('twitter');
			$table->text('linkedin');
			$table->text('website');
			$table->text('phone');
			$table->text('fields');
			$table->integer('id_company')->unsigned()->unique();
            $table->timestamps();
        });
		Schema::table('social_links', function($table) {
			$table->foreign('id_company')->references('id')->on('users');
			});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('social_links');
    }
}
