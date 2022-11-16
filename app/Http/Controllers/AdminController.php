<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            return view('admin', compact('users', 'tasks', 'articles'));
        }else{
            return view('home');
        }
    }
}
