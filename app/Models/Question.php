<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
   /** use HasFactory;*/

    public $timestamps = false;

    protected $fillable = [
        'test_id',
        'bucket_id',
        'question',
    ];

    public function test()
    {
        return $this->belongsTo('App\Models\Test');
    }

    public function answers()
    {
        return $this->hasMany('App\Models\Answer');
    }

    public function results()
    {
        return $this->hasMany('App\Models\Result');
    }

}
