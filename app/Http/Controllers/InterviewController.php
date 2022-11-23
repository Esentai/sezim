<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Interview;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        return redirect()->route('interview');

    }

}
