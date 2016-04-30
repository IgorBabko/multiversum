<?php

use Illuminate\Database\Migrations\Migration;

class CreateRatingsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('ratings', function ($table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('rating')->default(0);
            $table->morphs('rateable');
            $table->integer('user_id')->unsigned();
            $table->index('user_id')->default(1);
            $table->index('rateable_id')->default(1);
            $table->index('rateable_type')->default('Multiversum\Post');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('ratings');
    }
}
