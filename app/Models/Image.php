<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;
class Image extends Model
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

    public function getImageLatestComment()
    {
        return $this->morphOne(Comment::class,'commentable')->latestOfMany();
    }
}
