<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExtraInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extra_infos', function (Blueprint $table) {
			$table->increments('id');
			$table->mediumText('about_you');
			$table->text('linkedin')->nullable();
			$table->text('github')->nullable();
			$table->text('website')->nullable();
			$table->text('position');
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
        Schema::drop('extra_infos');
    }
}
