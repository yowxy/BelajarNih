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
        'title',
        'question_text',
        'correct_answer',
        'user_answer',
        'is_correct',
        'score',
        'option_a',
        'option_b',
        'option_c',
        'option_d',
    ];

    public function class ()
    {
        return $this->belongsTo(Clases::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // protected static function booted()
    // {
    //     static::saving(function ($examPage) {
    //         if ($examPage->user_answer) {
    //             $examPage->is_correct = $examPage->user_answer === $examPage->correct_answer;
    //             $examPage->score = $examPage->is_correct ? 100 : 0; // Skor 100 jika benar, 0 jika salah
    //         }
    //     });
    // }

}
