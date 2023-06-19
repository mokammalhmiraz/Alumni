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
use Image;

class UserInfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function insert(){
        if(Userinfo::find(Auth::id())){
            return view('home');
        }else{
            Userinfo::insert([
                'id' => Auth::id(),
                'user_id' => Auth::id(),
            ]);
            return view('home');
        }

    }
    function update(Request $request){
        if($request->photo){
            $request->validate([
                'photo' => 'required|mimes:jpg,png',
            ]);
            $user_name = User::find(Auth::id())->name_id;
            $upload_photo = $request->file('photo');
            echo $upload_photo_name = Auth::id().$user_name.".".$upload_photo->getClientOriginalExtension();
            Image::make($upload_photo)->save(base_path('public/images/uploads/profile/'.$upload_photo_name));
            $user_photo = Userinfo::find(Auth::id());
            $user_photo->photo = $upload_photo_name;
            $user_photo->update();
            return back();
        }
        if($request->number){
            $user_number = Userinfo::find(Auth::id());
            $user_number->number = $request->number;
            $user_number->update();
            return back();
        }
        if($request->location){
            $user_location = Userinfo::find(Auth::id());
            $user_location->location = $request->location;
            $user_location->update();
            return back();
        }
        if($request->about){
            $user_about = Userinfo::find(Auth::id());
            $user_about->about = $request->about;
            $user_about->update();
            return back();
        }
        elseif($request->edu_title){
            $edu = Userinfo::find(Auth::id());
            $edu->edu_title = $request->edu_title;
            $edu->start = $request->start;
            $edu->end = $request->end;
            $edu->edu_about = $request->edu_about;
            $edu->update();
            return back();
        }
        elseif($request->exp_title){
            $exp = Userinfo::find(Auth::id());
            $exp->exp_title = $request->exp_title;
            $exp->exp_about = $request->exp_about;
            $exp->update();
            return back();
        }
    }
}
