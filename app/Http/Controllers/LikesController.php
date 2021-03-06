<?php

namespace App\Http\Controllers;

use App\Tweet;
use App\User;
use Illuminate\Http\Request;

class LikesController extends Controller
{


    public function index(User $user)
    {
        $tweets = Tweet::whereReactedBy($user)->get();
        return view('like.index', compact('tweets'));
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
