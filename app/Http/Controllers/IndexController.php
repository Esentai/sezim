<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class IndexController extends Controller
{
        public function index()
        {
            $articles = Article::all();
            return view('index', compact('articles'));
        }
}
