<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $questions = Question::all();
        return view('questions', compact('questions'));
    }
    public function store(Request $request){
        $request->validate([
            'question_id' => 'required',
            'name' => 'required',
            'v1' => 'required',
            'v2' => 'required',
            'v3' => 'required',
            'v4' => 'required',
            'v5' => 'required',
        ]);

        Question::create($request->post());

        return redirect()->route('questions');

    }
}
