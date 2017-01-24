<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBackgroundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('backgrounds', function (Blueprint $table) {
            $table->increments('id');
			$table->string('university',100);
			$table->string('majors',100);
			$table->string('minors',100)->nullable();
			$table->text('additionnal');
			$table->integer('beginning');
			$table->integer('ending');
			$table->text('city');
			$table->text('country');
			$table->integer('id_applicant')->unsigned();
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
        Schema::drop('backgrounds');
    }
}
