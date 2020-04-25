<?php


namespace App;


trait followable
{

    public function follow($user)
    {
        return $this->follows()->save($user);
    }

    public function unfollow($user)
    {
        return $this->follows()->detach($user);
    }
        //how ,any people he/she follows
    public function follows()
    {
        return $this->belongsToMany(User::class, 'follows', 'user_id', 'following_user_id');
    }

    // how many people folling him/her
    public function isfollows()
    {
        return $this->belongsToMany(User::class, 'follows', 'following_user_id','user_id' );
    }

    public function following($user)
    {
        return $this->follows()->where('following_user_id', $user->id)->exists();
    }



    public function toggleFollow(User $user)
    {
        $this->follows()->toggle($user);
    }
}
