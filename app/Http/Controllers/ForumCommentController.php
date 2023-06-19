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

class ForumCommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    function insert(Request $request){
        echo $request->forum_id;
        echo $request->comment;
        Forumcomment::insert([
            'user_id' => Auth::id(),
            'post_id' => $request->forum_id,
            'comment' => $request->comment,
            'created_at' => Carbon::now(),
        ]);
        return back();
    }
}
