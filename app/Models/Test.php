<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
   /** use HasFactory;*/
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $timestamps = false;

    protected $fillable = [
        'title',
        'description',
    ];

     /**
      * Get the question for the user.
      */
    public function questions()
    {
        return $this->hasMany('App\Models\Question');
    }

}
