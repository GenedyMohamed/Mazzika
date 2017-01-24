<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class MusicController extends Controller
{
	 public function fetch_info($name)
    {
        $json = DB::table('music')->where('name', $name)->get();
        $info = json_decode($json, true);
         if($info == null || sizeof($info) == 0)
        {
            return view('apology',['title' =>'Not Found']);
        }
        $artist = DB::table('artists')->where('id', $info[0]['artist_id'])->value('username');
        $info[0]['artist'] = $artist;
        return view('music_info',['title' => $info[0]['name'], 'info' => $info[0], 'artist' => $json]);
    }    
}
