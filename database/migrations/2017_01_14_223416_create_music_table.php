<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMusicTable extends Migration
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
            $table->integer('artist_id');
        });  

                Schema::table('music', function(Blueprint $table)
    {
        $table->foreign('artist_id')
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
        Schema::dropIfExists('music');
    }
}
