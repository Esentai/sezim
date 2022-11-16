<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
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
        $profile = Profile::where('email', '=', Auth::user()->email)->latest()->get();
        return view('profile', compact('profile'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'number' => 'required',
            'postcode' => 'required',
            'state' => 'required',
            'area' => 'required',
            'education' => 'required',
            'country' => 'required',
            'region' => 'required',
        ]);

        Profile::create($request->post());

        return redirect()->route('profile');

    }

    }
