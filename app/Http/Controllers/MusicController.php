<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\user_reviews_music as user_reviews_music;
use App\user_likes_music as user_likes_music;

use auth;

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
            return view('apology', ['title' => 'Not Found', 'head' => 'Not Found', 'body' => "The item you were looking for was not found. it may have been deleted by the Artist or it may have not existed. please check the spelling and try again"]);       
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
        $info[0]['reviews_no'] = sizeof($reviews);
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
        
        // checks if the user likes the song already
      if(user_likes_music::where('user_id','=', auth::id())->count() > 0)
         {
            $likes = user_likes_music::where('user_id','=', auth::id())->get();
            $likes = json_decode($likes, true);
            $found = false;
            foreach($likes as $like)
            {
                if($like["music_id"] == $info[0]['id'])
                {
                    $found = true;
                }
            }

         }
        if($found)
        {
            $info[0]["like_color"] = 'blue';
            $info[0]['liked'] = 'true';
        }
        else
        {
            $info[0]["like_color"] = 'black';
            $info[0]['liked'] = 'false';
        }

        return view('music_info',['title' => $info[0]['name'], 'info' => $info[0], 'artist' => $json]);
    }

    /**
    * This function add a review that was posted by the reader
    */
    public function add_review(Request $request)
    {
        if(!auth::check())
        {
            return redirect('/');
        }
        $data['review'] = $request->input('review');
        if(strlen($data['review']) == 0 || $data['review'] == ' ')
        {
            return view('apology', ['title' => 'Failed', 'head' => 'Could not Complete process', 'body' => 'Your review was not added because it does not match the standrads of our reviews. please check your review and try again']);
        }
        $data['user_id'] = auth::id();
        $data['time'] = date('Y-m-d h:i:s', time());
        $data['music_id'] = $request->input('music_id');
        $new_review = new user_reviews_music();
        $new_review->store($data);
        return redirect()->back();

    }
    public function like(Request $request)
    {
        if(!auth::check())
        {
            return redirect('/');
        }
       
       $data['music_id'] = $request->input('id');
        $data['time'] = date('Y-m-d h:i:s', time());
        $data['user_id'] = auth::id();
        $new_like = new user_likes_music();
        $new_like->store($data);
        



    }
   
}

