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
use Image;

class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    function eventlist(){
        $events = Event::all()->where('added_by', '=', Auth::id());
        return view('event_list', compact('events'));
    }
    function eventpost(){
        return view('event_post');
    }
    function insert(Request $request){

        $request->validate([
            'banner' => 'required|mimes:jpg,png',
            'platfrom' => 'required_if:type,==,"Online"',
            'location' => 'required_if:type,==,"Offline"',
            'description' => 'string|min:100',
        ]);

        $type = $request->type;
        if($type == 'Online'){
            $location = 'null';
            $platfrom = $request->platfrom;
        }
        elseif($type == 'Offline'){
            $platfrom = 'null';
            $location = $request->location;
        }
        $user_name = User::find(Auth::id())->name_id;
        $file_name = $request->title;
        $upload_photo = $request->file('banner');
        $upload_photo_name = Auth::id().$user_name.$file_name.".".$upload_photo->getClientOriginalExtension();

        Image::make($upload_photo)->save(base_path('public/images/uploads/events/'.$upload_photo_name));
        Event::insert([
            'added_by' => Auth::id(),
            'event_title' => $request->title,
            'event_type' => $request->type,
            'event_seat' => $request->seat,
            'event_speaker' => $request->speaker,
            'event_participants' => 0,
            'event_platfrom' => $platfrom,
            'event_location' => $location,
            'event_deadline' => $request->deadline,
            'event_banner' => $upload_photo_name,
            'event_description' => $request->description,
            'created_at' => Carbon::now(),
        ]);
        return back()->with('status', 'Event Added!');
    }
    function delete($event_id){
        Event::find($event_id)->delete();
        return back();
    }
    function allevent(){
        $events = Event::all();
        return view('all_events', compact('events'));
    }
    function event(){
        $events = Event::all();
        $apply = Eventapply::all();
        $apply_id = $apply[0];
        return view('event', compact('events','apply_id','apply'));
    }
    function join_list(){
        $joins = Eventapply::all()->where('event_creator', '=', Auth::id());
        return view('event_join_list', compact('joins'));
    }

}
