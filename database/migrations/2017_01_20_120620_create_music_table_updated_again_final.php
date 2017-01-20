<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMusicTableUpdatedAgainFinal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('music', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('reviews_no');
            $table->string('link');
            $table->timestamps();
            /*
             ** Creating a foreign key
             */
            $table->integer('artist_id')->unsigned()->index();
            $table->foreign('artist_id')->references('id')->on('artists')->onDelete('CASCADE');

        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('music');
    }
}
