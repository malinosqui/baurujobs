<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');

            $table->string('title');
            $table->longText('description');
            $table->string('local');
            $table->boolean('remote');
            $table->integer('type');

            $table->integer('companyId')->unsigned()->index();
            $table->foreign('companyId')->references('id')->on('companies');

            $table->integer('fieldId')->unsigned()->index();
            $table->foreign('fieldId')->references('id')->on('fields');

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
        Schema::dropIfExists('jobs');
    }
}
