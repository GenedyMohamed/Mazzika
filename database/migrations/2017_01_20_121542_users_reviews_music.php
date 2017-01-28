<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsersReviewsMusic extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_reviews_music', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('review');
            $table->timestamps();

            /*
             ** Creating a foreign key to users table
             */
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE');
            /*
             ** Creating a foreign key to music table
             */
            $table->integer('music_id')->unsigned()->index();
            $table->foreign('music_id')->references('id')->on('music')->onDelete('CASCADE');
        });




    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_reviews_music');
    }
}
