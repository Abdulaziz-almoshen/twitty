<?php

namespace App\Http\Controllers;

use App\Tweet;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    public function index()
    {
        $tweets = auth()->user()->timeline();
        return view('tweets.index', compact('tweets'));
    }
    public function store(){
        dd(\request()->all());
        $tweet = request()->validate([
            'body' => 'required|max:140'
        ]);

        auth()->user()->tweets()->create($tweet);
        return redirect('/tweets');
    }
}
