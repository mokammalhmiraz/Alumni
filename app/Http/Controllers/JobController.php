<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Job;
use App\Models\Jobapply;
use Auth;
use Carbon\Carbon;

class JobController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function jobpost(){
        $job_count = Job::count();
        $user_id = Auth::id();
        $jobs = Job::all()->where('added_by', '=', $user_id);
        return view('job_post', compact('job_count', 'jobs'));
    }
    function insert(Request $request){
        $request->validate([
            'details' => 'string|min:100',
        ]);
        Job::insert([
            'added_by' => Auth::id(),
            'job_title' => $request->title,
            'job_type' => $request->type,
            'job_seat' => $request->seat,
            'apply_date' => $request->date,
            'job_salary' => $request->salary,
            'job_details' => $request->details,
            'created_at' => Carbon::now(),
        ]);

        return back()->with('status', 'Job Added!');
    }
    function details(Request $request){
        $comp_id = $request->user_id;
        $c_date = Carbon::now()->format('Y-m-d');
        $jobs = Job::all()->where('added_by', '=', $request->user_id);
        $user_id =  Auth::id();
        $job_id = Jobapply::all();
        $jobs_id = $job_id[0];

        // echo $apply_list = Jobapply::find(Auth::id())->id;


        return view('company', compact('jobs','c_date','comp_id','jobs_id'));
    }

    function apply(Request $request){
        $job_id = $request->job_id;
        return view('apply_job', compact('job_id'));
    }

    function jobs(){
        $job_list = Job::all();
        $jobs = $job_list;
        $added_by = $job_list[0]->added_by;
        return view('jobs', compact('jobs','added_by'));
    }
    function all_jobs(){
        $job_list = Job::all();
        $jobs = $job_list;
        $added_by = $job_list[0]->added_by;
        return view('all_jobs', compact('jobs','added_by'));
    }
    function delete($job_id){
        Job::find($job_id)->delete();
        return back();
    }

}
