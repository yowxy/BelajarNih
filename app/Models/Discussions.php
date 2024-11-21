<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Discussions extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable =
    [
        'user_id',
        'title',
        'content',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function discussionReplies()
    {
        return $this->hasMany(DiscussionReplies::class);
    }

}
