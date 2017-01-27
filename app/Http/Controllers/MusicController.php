<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class MusicController extends Controller
{
	 public function fetch_info($name)
    {
        // gets a json object containing the music info
        $json = DB::table('music')->where('name', $name)->get();
        $info = json_decode($json, true);

        // if the array is of zero elements, than it does not exist
        if($info == null || sizeof($info) == 0)
        {
            return view('apology',['title' =>'Not Found']);
        }

        // gets all the rows containing the music ID
        $json = DB::table('user_likes_music')->where('music_id', $info[0]['id'])->get();
        // gets artist name
        $artist = DB::table('artists')->where('id', $info[0]['artist_id'])->value('username');
        
        // adds the fetched info to the array
        $info[0]['artist'] = $artist;
        $info[0]['likes'] = sizeof($json); // calculates the number of likes

        // gets all the associative reviews
        $json = DB::table('user_reviews_music')->where('music_id', $info[0]['id'])->orderBy('created_at', 'desc')->get();
        $reviews = json_decode($json, true);
        // adds the reviews to array
        $info[0]["reviews"] = $reviews;

        // fetch the name of the users who reviewed the song
        $users = [];
        foreach($reviews as $key => $review)
        {
            $json = DB::table('users')->where('id', $review['user_id'])->get();
            $user = json_decode($json, true);
            $users[$key] = $user[0]["name"];
        }
        // adds the users to the array
        $info[0]["users"] = $users;
        

        return view('music_info',['title' => $info[0]['name'], 'info' => $info[0], 'artist' => $json]);
    }

    /**
    * This function add a review that was posted by the reader
    */
    public function add_review($name)
    {
        $user_id = Auth::id();
        $music_id = DB::table('music')->where('name', $name)->value('id');
        $review = $param->input('review');
        DB::table('users')->insert(['review' => $review, 'created_at' => time(), 'update_at' => time(), 'user_id' => $user_id,'user_id' => $user_id, 'music_id' =>$music_id]);
        header('Location:' . $name);

    }
   
}

