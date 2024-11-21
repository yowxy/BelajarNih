<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DiscussionAnswer extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'discussion_reply_id',
        'user_id',
        'content',
    ];

    public function disscussionReply ()
    {
        return $this->belongsTo(DiscussionReplies::class);
    }

    public function user (){
        return $this->belongsTo(User::class);
    }
}
