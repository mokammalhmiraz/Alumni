<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
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
        return view('index');
    }
    public function company()
    {
        return view('company');
    }
    public function readmore()
    {
        return view('readmore');
    }
    public function jobs()
    {
        return view('joblist');
    }
    public function event()
    {
        return view('event');
    }
}
