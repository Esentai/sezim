<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
        $article = Article::findorfail($id);
        $comments = Comment::all();
        return view('show', compact('article', 'comments'));
    }


}
