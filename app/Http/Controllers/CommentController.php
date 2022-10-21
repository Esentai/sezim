<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id){
        $comments = Comment::all();
        return view('show', compact('comments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'post_id' => 'required',
            'user_id' => 'required',
            'comment' => 'required',
        ]);

        Comment::create($request->post());

        return redirect()->route('home');
    }
}
