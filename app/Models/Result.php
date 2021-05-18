<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'test_id',
        'bucket_id',
        'question_id',
        'result'
    ];

    public function question()
    {
        return $this->belongsTo('App\Models\Question');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

}
