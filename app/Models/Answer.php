<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'question_id',
        'correct_answer'
    ];

    public function question()
    {
        return $this->belongsTo('App\Models\Question');
    }

}
