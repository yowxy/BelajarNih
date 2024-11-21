<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory,Notifiable,SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'picture'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];


    public function discussions()
    {
        return $this->hasMany(Discussions::class);
    }

    public function discussionReplies()
    {
        return $this->hasMany(DiscussionReplies     ::class);
    }


    public function clases()
    {
        return $this->hasMany(Clases::class);
    }

    public function examPages()
    {
        return $this->hasMany(ExamPages::class);
    }

    public function quizzes()
    {
        return $this->hasMany(Quizzes::class);
    }

    public function studyTips()
{
    return $this->hasMany(StudyTips::class);
}




}
