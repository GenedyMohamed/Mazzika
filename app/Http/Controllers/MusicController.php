<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MusicController extends Controller
{
	 public function fetch_info($name)
    {
        $info = DB::table('music')->where('name', $name); 
        if($info == null || sizeof($info) == 0)
        {
        	return view('apology',['title' =>'Not Found']);
        }
        else
        {
        	return view('music_info',['title' => $info['name'] ,'info' => $info]);
        }
    }    
}
