<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Schedule;
use App\Models\Post;
use App\Models\Comment;


class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        "name",
        "email",
        "password"
    ];

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
