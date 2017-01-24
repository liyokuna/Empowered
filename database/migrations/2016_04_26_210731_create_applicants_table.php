<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->increments('id');
			$table->string('name_applicant');
			$table->string('email');
			$table->text('body');
			$table->integer('id_applicant')->unsigned();
			$table->foreign('id_applicant')->references('id')->on('users');
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
        Schema::drop('applicants');
    }
}
