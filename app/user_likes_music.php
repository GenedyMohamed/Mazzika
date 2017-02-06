<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_likes_music extends Model
{
    
    protected $table = 'user_likes_music';

    /**
    ** Adds a new like to the song
    **/
    public function store($request)
    {
    	$like = new user_likes_music;
    	$like->created_at = $request['time'];
    	$like->updated_at = $request['time'];
    	$like->music_id  = $request['music_id'];
    	$like->user_id  = $request['user_id'];
    	$like->save();
    }
   

}
