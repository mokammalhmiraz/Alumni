<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Job;
use App\Models\Event;
use App\Models\Eventapply;
use App\Models\Forum;
use App\Models\Forumcomment;
use Auth;
use Carbon\Carbon;

class ForumController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    function forum(){
        $all = Forum::all();
        return view('forum', compact('all'));
    }
    function insert(Request $request){
        Forum::insert([
            'added_by' => Auth::id(),
            'post' => $request->post,
            'created_at' => Carbon::now(),
        ]);
        return back();
    }
    function view(Request $request){
        $comments = Forumcomment::all()->where('post_id','=',$request->id);
        $total = Forumcomment::all()->where('post_id','=',$request->id)->count();
        $datas = Forum::all()->where('id','=',$request->id);
        return view('forum_view', compact('datas','comments','total'));
    }
}
