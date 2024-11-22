<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StudyTips extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable =
    [
        'user_id',
        'title',
        'content',
        'image_url',
        'is_bookmarked',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

 

}
