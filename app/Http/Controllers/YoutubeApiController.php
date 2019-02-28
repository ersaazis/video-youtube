<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\YoutubeApi;

class YoutubeApiController extends Controller
{
    public function index()
    {
        return view('youtube.config', ['youtubeApi' => YoutubeApi::where(['key'=>'YoutubeApi'])->first()->api]);
    }
    public function update(Request $request)
    {
        $this->validate($request, [
            'api' => 'required',
        ]);
        YoutubeApi::where(['key'=>'YoutubeApi'])->update(['api'=>$request->input('api')]);
         return redirect()->route('video.config');
    }
}
