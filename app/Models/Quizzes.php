<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Quizzes extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable =
    [
        'clases_id',
        'title',
        'question',
        'description',
        'correct_answer',
        'total_questions',
        'option_a',
        'option_b',
        'option_c',
        'option_d',
    ];

    public function class()
    {
        return $this->belongsTo(Clases::class);
    }
}
