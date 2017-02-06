<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\AllMusic;

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
        $music = AllMusic::all();
        return view('music',['music' => $music]);

    }
    public static function getContinuity($source) {

        try{

            $getContinuity = DB::table('music');

            return $getContinuity;

        } catch (\Exception $ex) {

            return false;
        }
    }
}
