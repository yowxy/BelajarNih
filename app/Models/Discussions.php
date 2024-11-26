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
        'is_solved',
        'image_url',
    ];  


    public function getIsSolvedAttribute($value)
    {
        return $value ? 'solved' : 'not solved';
    }
    protected $casts = [
        'is_solved' => 'string',
    ];

    // Simpan nilai sebagai boolean
    public function setIsSolvedAttribute($value)
    {
        $this->attributes['is_solved'] = $value === 'solved';
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function discussionReplies()
    {
        return $this->hasMany(DiscussionReplies::class);
    }

}
