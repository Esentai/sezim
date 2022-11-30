<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\User;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DestroyController extends Controller
{
    public function articleDestroy(Request $request)
    {
        DB::table('articles')->delete($request->id);
        return redirect()->route('admin');
    }

    public function userDestroy(Request $request)
    {
        DB::table('users')->delete($request->id);
        return redirect()->route('admin');
    }

    public function taskDestroy(Request $request)
    {
        DB::table('tasks')->delete($request->id);
        return redirect()->route('admin');
    }

    public function questionDestroy(Request $request)
    {
        DB::table('questions')->delete($request->id);
        return redirect()->route('admin');
    }

}
