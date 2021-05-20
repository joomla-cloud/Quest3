<?php

namespace App\Http\Controllers;

use App\Models\Test;
use App\Models\Question;
use App\Models\Answer;
use App\Models\Result;
use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function show($slug)
    {

        //get the requested questions
        $questions = Question::query()
            ->where('slug', $slug)
            ->orderBy('id','asc')

            ->firstOrFail();

       //return the data to the corresponding view
        return view('test', [
            'questions' => $questions
        ]);
    }
}
