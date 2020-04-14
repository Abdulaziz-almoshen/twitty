<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable
{
    use Notifiable , followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password' ,'info', 'nickname','image'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function tweets(){
        return $this->hasMany(Tweet::class);
    }



    public function getImageAttribute($vale)
    {
        return asset('storage/'.$vale);
    }

    public function timeline(){
        $ids = $this->follows()->pluck('id');
        $ids->push($this->id);
        return Tweet::whereIn('user_id',$ids)->latest()->paginate(10);
        //$owner = $this->tweets()->get();
        // $friends= $this->follows->map->tweets->flatten();
        // return $owner->merge($friends)->sortByDesc('created_at') ;
    }

    public function path()
    {
        return route('profile', $this->name);
    }

    public function getRouteKeyName()
    {
        return 'name';
    }


}
