<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DiscussionReplies extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable =
    [
        'discussion_id',
        'user_id',
        'content',
        'reply',
    ];

    public function discussion(){
        return $this->belongsTo(Discussions::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
