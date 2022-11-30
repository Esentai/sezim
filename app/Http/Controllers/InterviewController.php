<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Interview;
use App\Models\MyTask;
use App\Models\Question;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class InterviewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $count = count(Interview::all());
        $all = Interview::all();

        return view('interview', compact('count', 'all'));
    }

    public function msq(){
        $questions = Question::all();
        return view('msq', compact('questions'));
    }

    public function store(Request $request){
        $res = $request->post();
        $sum = $res['q1'] + $res['q2'] + $res['q3'] + $res['q4'] + $res['q5'] + $res['q6'] + $res['q7'] + $res['q8'] + $res['q9'] + $res['q10'] + $res['q11'] + $res['q12'] + $res['q13'] + $res['q14'] + $res['q15'] ;
        Interview::create(['user_id' => Auth::user()->id, 'score' => $sum]);

       // DB::table('my_tasks')->where('user_id', Auth::user()->id)->truncate();
        $tasks = Task::all();
        $mytasks = array();
        foreach ($tasks as $task){
            if ($sum >= 22 && $task->score == 22 ){
                $mytasks[] = $task->id;
            }
            if ($sum >= 16 && $sum < 22  && $task->score == 16){
                $mytasks[] = $task->id;
            }
            if ($sum >= 12 && $sum < 16 && $task->score == 12 ){
                $mytasks[] = $task->id;
            }
            if ($sum >= 10 && $sum < 12 && $task->score == 10 ){
                $mytasks[] = $task->id;
            }
            if ($sum >= 5 && $sum < 10 && $task->score == 5 ){
                $mytasks[] = $task->id;
            }
        }

        foreach ($mytasks as $mytask){
            MyTask::create(['user_id' => Auth::user()->id, 'task_id' => $mytask, 'status' => '0']);
        }

        return redirect()->route('interview');

    }

}
