<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Job;
use App\Models\Jobapply;
use Auth;
use Carbon\Carbon;
use Image;

class JobApplyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function insert(Request $request){
        $request->validate([
            'photo' => 'required|mimes:jpg,png',
            'cv' => 'required|mimes:doc,pdf'
        ]);
        Auth::id();
        $upload_photo = $request->file('photo');
        $upload_cv = $request->file('cv');

        $user_name = User::find(Auth::id())->name_id;
        $job_seat = Job::find($request->job_id)->job_seat;
        $job_id = $request->job_id;
        $job = Job::find($job_id);

        $upload_photo_name = Auth::id().$user_name.".".$upload_photo->getClientOriginalExtension();
        $upload_cv_name = Auth::id().$user_name.".".$upload_cv->getClientOriginalExtension();

        Image::make($upload_photo)->save(base_path('public/images/uploads/apply_img/'.$upload_photo_name));
        // Image::make($upload_cv)->save(base_path('public/images/uploads/apply_cv/'.$upload_cv_name));
        $request->file('cv')->storeAs('public/uploads/apply_cv/'.$upload_cv_name);

        Jobapply::insert([
            'job_id' => $request->job_id,
            'applicant_id' => Auth::id(),
            'applicant_name' => $request->name,
            'applicant_email' => $request->email,
            'applicant_number' => $request->number,
            'applicant_address' => $request->address,
            'applicant_photo' => $upload_photo_name,
            'applicant_about' => $request->about,
            'applicant_cv' => $upload_cv_name,
            'created_at' => Carbon::now(),
        ]);
        $new_job_seat = $job_seat - 1;
        $job->job_seat = $new_job_seat;
        $job->update();
        return back()->with('status', 'Job Applied Successfully!');
    }
}
