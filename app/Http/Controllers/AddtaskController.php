<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class AddtaskController extends Controller
{
    public function index()
    {
        return view('addTask');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        Task::create($request->post());

        return redirect()->route('tasks');

    }
}
