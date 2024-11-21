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
        'class_id',
        'title',
        'question',
        'options',
        'correct_answer'
    ];

    public function class()
    {
        return $this->belongsTo(Clases::class);
    }
}
