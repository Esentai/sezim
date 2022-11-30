<?php

namespace App\Http\Controllers;

use App\Models\MyTask;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
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
        $myTasks = DB::table('my_tasks')->where('user_id', Auth::user()->id)->get();
        $tasks = Task::all();
        return view('tasks', compact('tasks', 'myTasks'));
    }
    public function taskStatus(Request $request){
        //dd($request->taskID);
        MyTask::where('user_id', Auth::user()->id)->where('task_id', $request->taskID )->update(array(
            'status'=>'Accept',
        ));
        $myTasks = DB::table('my_tasks')->where('user_id', Auth::user()->id)->get();
        $tasks = Task::all();
        return view('tasks', compact('tasks', 'myTasks'));

    }
}
