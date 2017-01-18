<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserReviewsMusic extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_reviews_music', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('music_id')->unsigned();
            $table->string('review');
            $table->timestamps();
        });    

        Schema::table('user_reviews_music', function(Blueprint $table)
    {
        $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
    });

        Schema::table('user_reviews_music', function(Blueprint $table)
    {
        $table->foreign('music_id')
                ->references('id')
                ->on('music')
                ->onUpdate('cascade')
                ->onDelete('cascade');
    });
//        Schema::table('user_likes_music', function(Blueprint $table)
//        {
//            $table->primary(['user_id', 'music_id']);
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_reviews_music');    }
}
