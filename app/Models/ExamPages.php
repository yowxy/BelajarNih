<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExamPages extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable =
    [
        'class_id',
        'user_id',
        'score',
        'title',
        'question_text',
        'correct_answer',
        'use_answer',
        'is_correct',
    ];

    public function class ()
    {
        return $this->belongsTo(Clases::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
