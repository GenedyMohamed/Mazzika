<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_reviews_music extends Model
{
    protected $table = 'user_reviews_music';

    public function store($request)
    {
    	$review = new user_reviews_music;
    	$review->review = $request['review'];
    	$review->created_at = $request['time'];
    	$review->updated_at = $request['time'];
    	$review->music_id  = $request['music_id'];
    	$review->user_id  = $request['user_id'];
    	$review->save();
    }
}
