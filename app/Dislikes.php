<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Likes;
use App\Post;

class Dislikes extends Model
{
    protected $guarded = [];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
