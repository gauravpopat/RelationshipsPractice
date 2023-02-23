<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;

class Video extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function comment()
    {
        return $this->morphOne(Comment::class,'commentable');
    }

    public function comments()
    {
        return $this->morphMany(Comment::class,'commentable');
    }
    public function getVideoOldestComment()
    {
        return $this->morphOne(Comment::class,'commentable')->oldestOfMany();
    }
}
