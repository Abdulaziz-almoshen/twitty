<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Qirolab\Laravel\Reactions\Traits\Reactable;
use Qirolab\Laravel\Reactions\Contracts\ReactableInterface;

class Tweet extends Model  implements ReactableInterface

{
    use Reactable;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function isLike($user)
    {
        if ($this->isReactBy($user)) {
            return $this->reacted($user)->type == "like";
        }
    }

    public function isDislike($user)
    {
        if ($this->isReactBy($user)) {
            return $this->reacted($user)->type == "dislike";
        }
    }

    public function likesCount()
    {
        if (isset($this->reaction_summary['like'])) {
            return $this->reaction_summary['like'];
        } else
            return null;
    }
    public function dislikesCount()
    {
        if (isset($this->reaction_summary['dislike'])) {
            return $this->reaction_summary['dislike'];
        } else
            return null;
    }

}
