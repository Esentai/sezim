<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
        public function index()
        {
            $articles = Article::all();
            if (Auth::check()) {
                $taskCount = count(DB::table('my_tasks')->where('user_id', Auth::user()->id)->where('status', '0')->get());
            }else{
                $taskCount = 0;
            }
            return view('index', compact('articles', 'taskCount'));
        }
}
