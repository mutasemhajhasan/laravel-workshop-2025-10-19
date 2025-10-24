<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    function user(){
        return $this->belongsTo(User::class,'user_id');;
    }

    function comments(){
        return $this->hasMany(Comment::class,'post_id');
    }
}
