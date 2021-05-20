<?php

namespace App\Http\Controllers;

use App\Models\Test;
use App\Models\Question;
use App\Models\Answer;
use App\Models\Result;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
/**        return view('welcome');
*/
        //get the test that are published, sort by decreasing order of "id".
        $tests = Test::query()
            ->orderBy('id','desc')
            ->get();

        //return the data to the corresponding view
        return view('index', [
            'tests' => $tests
        ]);

    }
}

