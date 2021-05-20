namespace App\Http\Controllers;

use App\Models\Test;
use App\Models\Question;
use App\Models\Answer;
use App\Models\Result;
use App\Models\User;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function __invoke($slug)
    {

        //get the questions for this test
        $questions = Question::query()
            ->where('slug', $slug)
            ->orderBy('id','asc')
            ->paginate(1)
            ->get();

        //return the data to the corresponding view
        return view('test', [
            'test' => $test,
            'questions' => $questions
        ]);
    }
}

