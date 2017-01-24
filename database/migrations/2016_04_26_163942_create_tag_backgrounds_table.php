<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagBackgroundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tag_backgrounds', function (Blueprint $table) {
            $table->increments('id');
			$table->string('background',50);
			$table->enum('status',['preferred','required']);
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
        Schema::drop('tag_backgrounds');
    }
}
