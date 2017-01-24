<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_companies', function (Blueprint $table) {
            $table->increments('id');
			$table->string('name', 100);
			$table->longText('description');
			$table->integer('number');
			$table->string('street');
			$table->string('city');
			$table->string('country');
			$table->integer('id_company')->unsigned()->nullable()->unique();
			$table->foreign('id_company')->references('id')->on('users');
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
        Schema::drop('about_companies');
    }
}
