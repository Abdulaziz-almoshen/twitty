<?php

namespace App\Http\Controllers;

use App\Tweet;
use App\User;
use Illuminate\Http\Request;

class LikesController extends Controller
{


    public function index(User $user)
    {
        $tweet = Tweet::whereReactedBy($user)->get();
        dd($tweet);
        return view('like.idex', compact('tweet'));
    }

    public function like(Tweet $tweet) {
        $tweet->toggleReaction('like');
        return redirect()->back();
    }
    public function dislike(Tweet $tweet) {
        $tweet->toggleReaction('dislike');
        return redirect()->back();
    }
}
