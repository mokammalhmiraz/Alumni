<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    function dashboard(){
        $user_count = User::count();
        return view('home', compact('user_count'));
    }
    function userlist(){
        $users = User::all()->where('status', '=', 'alumni');
        return view('alumni_list', compact('users'));
    }
    function studentlist(){
        $users = User::all()->where('status', '=', 'student');
        return view('student_list', compact('users'));
    }
    function requestlist(){
        $users = User::all()->where('status', '=', '0');
        return view('request_list', compact('users'));
    }
    function companylist(){
        $users = User::all()->where('status', '=', 'company');
        return view('company_list', compact('users'));
    }
    function delete($comp_id){
        echo $comp_id;
    }
}
