<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExploreController extends Controller
{



    public function index() {

        return view('explore.index', [
            'users' => User::where('id' ,'!=', auth()->user()->id)->paginate(5)
        ]);

    }
}
