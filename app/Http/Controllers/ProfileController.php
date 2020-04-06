<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ProfileController extends Controller
{
    public function show(User $user )
    {
        return view('profile.show', compact('user'));
    }


    public function store(User $user)
    {
        auth()->user()->toggle($user);
        return back();
    }


    public function edit(User $user)
    {

//        $this->authorize('edit',$user);
           return view('profile.edit',compact('user'));

    }

    public function update(User $user)
    {

        $data =  request()->validate([
            'name'=> 'required',
            'image' => 'required',
            'nickname' => 'required|max:10',
            'info' => 'required'
        ]);

       $user->name = $data['name'];
       $user->image = $data['image'];
       $user->nickname = '@'.$data['nickname'];
       $user->info = $data['info'];
        $user->save();
        \Auth::setUser($user);
        return view('profile.edit', compact('user'));
    }
}
