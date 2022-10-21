<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('create');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        Article::create($request->post());

        return redirect()->route('home');

    }

}
