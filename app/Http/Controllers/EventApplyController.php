<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Job;
use App\Models\Event;
use App\Models\Eventapply;
use Auth;
use Carbon\Carbon;

class EventApplyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    function update($event_id){
        $event_creator = Event::find($event_id)->added_by;
        $event = Event::all()->where('id','=',$event_id);
        // $event_creator = $event[0]->added_by;
        Eventapply::insert([
            'apply_id' => Auth::id(),
            'event_id' => $event_id,
            'event_creator' => $event_creator,
            'created_at' => Carbon::now(),
        ]);
        $old_participant= Event::find($event_id);
        $total_participant = $old_participant->event_participants;
        $new_participant = $total_participant + 1;
        $old_participant->event_participants = $new_participant;
        $old_participant->update();
        return back();

    }
}
