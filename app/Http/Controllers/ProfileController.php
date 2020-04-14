<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function show(User $user )
    {
        return view('profile.show', [
            'user' => $user,
            'tweets' => $user->tweets()->paginate(5)
        ]);
    }


    public function store(User $user)
    {
        auth()->user()->toggleFollow($user);
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
            'name'=> ['string', 'max:15'],
            'image' => 'image','size:1024',
            'nickname' => ['max:9',Rule::unique('users')->ignore($user)],
            'info' => ['string', 'min:2'],
        ]);
        $user->name = $data['name'];
        $user->nickname = '@'.$data['nickname'];
        $user->info = $data['info'];

        if (\request('current_password')) {
            \request()->validate([
                'current_password' => 'password',
                'new_password' => 'string|min:8',
            ]);
            $user->password = Hash::make(request('new_password'));
        }

       if (request('image')) {
           request()->validate([
               'image' => 'image','size:1024'
            ]);
           $data['image'] = request('image')->store('hello','public');
       }


//        $data['image'] = request('image')->store('', 'google');
        $user->update($data);

        return redirect($user->path());
    }
}
