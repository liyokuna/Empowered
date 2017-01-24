<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->increments('id');
			$table->string('business_name',100);
			$table->string('mission_name',100);
			$table->string('field',100);
			$table->integer('moth_beginning');
			$table->integer('year_beginning');
			$table->integer('month_ending');
			$table->integer('year_ending');
			$table->mediumText('description');
			$table->text('additionnal');
			$table->text('city');
			$table->text('country');
			$table->integer('id_applicant')->unsigned();
			$table->foreign('id_applicant')->references('id')->on('users');
            $table->timestamps();
        });
		
		Schema::table('experiences', function ($table) {
		$table->text('additionnal')->nullable()->change();
		$table->string('field',100)->nullable()->change();
		$table->renameColumn('moth_beginning','month_beginning');
		});

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('experiences');
    }
}
