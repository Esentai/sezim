<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Question;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (Auth::user()->email == 'admin@gmail.com') {
            $users = User::all();
            $tasks = Task::all();
            $articles = Article::all();
            $questions = Question::all();
            return view('admin', compact('users', 'tasks', 'articles', 'questions'));
        }else{
            return view('home');
        }
    }

}
