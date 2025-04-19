<?php

namespace App\Http\Controllers;
use App\Models\StudentLogin;
use Illuminate\Http\Request;
use App\Models\attendence;
use App\Models\semesterdetails;
use App\Models\semeterNo;
use Illuminate\Support\Facades\Auth;

use App\Models\examdetails;
class pageController extends Controller
{
 
    public function loginPageFun()
    {
        return view('login');
    }
    public function registerPageFun()
    {
        return view('Register');
    }
    public function dashoardPageFun()
    {
        return view('dashboard');
    }
    public function dashoardfun(Request $req)
    {
        // return view('dashboard');
        // For Register An Student;
        // $StudentLogin = new StudentLogin;
        // $StudentLogin->userEmail=$req->user_mail;
        // $StudentLogin->userPassword=$req->user_password;
        // $StudentLogin->save();

        //For Login Student;
        $email=$req->input('user_mail');
        $pass=$req->input('user_password');
        $StudentLogin = StudentLogin::where('userEmail',$email)->where('userPassword',$pass)->first();
        if($StudentLogin)
        {
            return view('dashboard');
        }
        else
        {
            return redirect()->back();
        }
    }
    public function registercomplainsFun()
    {
        return view('registerComplain');
    }
    public function profilePage()
    {
        return view('profile');
    }
    public function attendencePage()
    {
        $attendence =  attendence::all();
        return view('attendence',compact('attendence'));

    }

    public function examfetch()
    {
        $examDetail = examdetails::all();
        $semesterdetails=semesterdetails::all();
        $semeterNo = semeterNo::all();
        return view('examfetch',compact('examDetail','semesterdetails',"semeterNo"));
        //return view('examfetch');
    }
    public function forgetPassword()
    {
        return view('forgetPassword');

    }
    public function AnnoumentPage()
    {
        return view("Annoument");
    }

    public function ForgrtPage()
    {
        return view("forget");
    }
    public function feedbackform()
    {
        return view('feedback');
    }


}
