<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocialNetworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_networks', function (Blueprint $table) {
            $table->increments('id');
			$table->string('linkedin_id')->unique();
            $table->string('name');
            $table->string('avatar');
			$table->rememberToken();
			$table->integer('id_applicant')->unsigned()->unique();
			$table->foreign('id_applicant')->references('id')->on('users');
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
        Schema::drop('social_networks');
    }
}
