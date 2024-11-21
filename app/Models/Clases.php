<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Clases extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable =
    [
      'title',
      'description',
      'thumbnail',
    ];

    public function quizzes(){
        return $this->hasMany(Quizzes::class);
    }

    public function examPages()
    {
        return $this->hasMany(ExamPages::class);
    }
}
