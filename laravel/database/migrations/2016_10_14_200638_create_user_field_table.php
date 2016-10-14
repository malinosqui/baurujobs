<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserFieldTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_field', function(Blueprint $table){
            $table->integer('userId')->unsigned()->index();
            $table->foreign('userId')->references('id')->on('users');

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
        Schema::dropIfExists('user_field');
    }
}
