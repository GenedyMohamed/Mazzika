<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AllMusicController extends Controller
{
    public function index()
    {
        $json = DB::table('music')->get();
        $info = json_decode($json,true);

        if($info == null || sizeof($info) == 0)
        {
            return view('apology',['title' =>'Not Found']);
        }

        return view('music',['music'=>$json]);

    }
}
