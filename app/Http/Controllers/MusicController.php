<?php

namespace App\Http\Controllers;

use App\Music;
use Illuminate\Http\Request;

class MusicController extends Controller
{
    public function update(Request $request)
    {
        $data = array_filter($request->all(), function ($element) {
            return $element != NULL;
        });
        $music = Music::find($data['id']);
        $music->update($data);
        return back()->with('success', true);
    }

    public function delete(Request $request)
    {
        $id = $request->all()['id'];
        Music::find($id)->delete();
        return back()->with('success', true);
    }

}
