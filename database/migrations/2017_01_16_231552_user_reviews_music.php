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
            $table->integer('user_id');
            $table->integer('music_id');
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
