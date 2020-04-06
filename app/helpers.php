<?php


namespace App;


class helpers
{
    public function current_user()
    {
       return auth()->user();
    }

}
