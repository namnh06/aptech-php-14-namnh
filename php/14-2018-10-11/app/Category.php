<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //relation ship with post model
    public function posts()
    {
        return $this->belongsToMany('App\Post');
    }
}
