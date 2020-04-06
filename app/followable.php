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

    public function follows()
    {
        return $this->belongsToMany(User::class, 'follows', 'user_id', 'following_user_id');
    }

    public function following($user)
    {
        return $this->follows()->where('following_user_id', $user->id)->exists();
    }

    public function toggle($user)
    {
        if ($this->following($user)){
            return $this->unfollow($user);
        }
            return $this->follow($user);
    }
}
