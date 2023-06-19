<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Job;
use App\Models\Event;
use App\Models\Eventapply;
use App\Models\Userinfo;
use Auth;
use Carbon\Carbon;

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
        $user_id = Userinfo::all()->where('id','=',Auth::id());
        return view('index', compact('user_id'));
    }
    public function readmore()
    {
        return view('readmore');
    }
    public function jobs()
    {
        return view('jobs');
    }
    public function event()
    {
        return view('event');
    }
}
