<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tag_skills', function (Blueprint $table) {
            $table->increments('id');
			$table->string('skill',50);
			$table->enum('level',['beginner','intermediate','advanced']);
			$table->integer('id_post')->unsigned();
			$table->foreign('id_post')->references('id')->on('posts');
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
        Schema::drop('tag_skills');
    }
}
