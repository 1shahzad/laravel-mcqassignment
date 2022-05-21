<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\User;
use App\Models\UserAnswer;
use App\Models\UserAnswerDetail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Exception;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class HomeController extends Controller
{

    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $url = "https://opentdb.com/api.php?amount=10";

        $result = file_get_contents($url);

        $new_result = json_decode($result, true);

        $questions = $new_result['results'];

        $questions_array = [];
        Session::forget('questions');
        if (!Session::has('questions')) {
            $i = 0;
            foreach ($questions as $question) {
                $questions_array[$i]['qid'] = $i;
                $questions_array[$i]['category'] = $question['category'];
                $questions_array[$i]['type'] = $question['type'];
                $questions_array[$i]['difficulty'] = $question['difficulty'];
                $questions_array[$i]['question'] = $question['question'];
                $questions_array[$i]['choices'] = (count($question['incorrect_answers'])+1);
                if (count($question['incorrect_answers']) > 0) {
                    $j = 1;
                    foreach ($question['incorrect_answers'] as $key=>$value) {
                        $questions_array[$i]['option' . $j] = $value;
                        $j++;
                    }
                    $last_option=(count($question['incorrect_answers'])+1);
                    $questions_array[$i]['option' . $last_option] = $question['correct_answer'];
                }
                $questions_array[$i]['correct_answer'] = $question['correct_answer'];
                $questions_array[$i]['user_answer'] = '';
                $i++;
            }
            Session::put('questions', $questions_array);
        }
        return view('frontend.home',compact('questions_array'));
    }

    public function quiz_ques_store(Request $request)
    {
        if (Session::has('questions')) {
            $questions_array = Session::get('questions');

            for ($i = 0; $i < count($questions_array); $i++) {
                $qid=$questions_array[$i]['qid'];
                if ($questions_array[$i]['qid'] == $request->input('ques'.$qid)) {
                    $ans = $request->input('ans'.$qid);
                    $questions_array[$i]['user_answer'] = $ans;
                }
            }
        }
        Session::put('questions', $questions_array);

        $point = 0;

        for ($i = 0; $i < count($questions_array); $i++) {
            if ($questions_array[$i]['correct_answer'] == $questions_array[$i]['user_answer']) {
                $point += 1;
            }
        }

        $total_points = $point;

        $answer = "Your number of correct answers are " . $total_points . " out of 10 questions.";

        Session::put('point', $point);
        Session::put('answer', $answer);

        return redirect()->route('register.form');
    }

    public function register_form() {
        return view('frontend.user.auth.register');
    }

    public function register_user(Request $request) {
        $this->validate($request,[
            'fullname' => ['required','max:255'],
            'email' => ['required','email','regex:/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/'],
        ]);

        $request->password = rand(000000,999999);

        $point = Session::get('point');
        $answer = Session::get('answer');
        $questions_array = Session::get('questions');

        $user_id = User::insertGetId([
            'name' => $request->fullname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'created_at' => Carbon::now()
        ]);

        $user_answer_id = UserAnswer::insertGetId([
            'user_id' => $user_id,
            'user_points' => $point,
            'quiz_date' => Carbon::now(),
            'quiz_time' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        foreach($questions_array as $questions1){
            $patient_answer_details_id = UserAnswerDetail::insertGetId([
                'user_answer_id' => $user_answer_id,
                'category_name' => $questions1['category'],
                'type' => $questions1['type'],
                'difficulty' => $questions1['difficulty'],
                'question' => $questions1['question'],
                'option_one' => (isset($questions1['option1']) ? $questions1['option1'] : ''),
                'option_two' => (isset($questions1['option2']) ? $questions1['option2'] : ''),
                'option_three' => (isset($questions1['option3']) ? $questions1['option3'] : ''),
                'option_four' => (isset($questions1['option4']) ? $questions1['option4'] : ''),
                'correct_answer' => $questions1['correct_answer'],
                'user_answer' => $questions1['user_answer'],
                'created_at' => Carbon::now()
            ]);
        }

        Session::forget('point');
        Session::forget('answer');
        Session::forget('questions');

        return view('frontend.user.result',compact('answer'));
    }

}
