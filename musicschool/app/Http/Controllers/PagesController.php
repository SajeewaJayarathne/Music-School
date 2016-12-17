<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    

    public function login()
    {
    	return view('Login.login');
    }

    public function loginerror()
    {
    	return view('Login.loginerror');
    }

    public function dashboard()
    {
    	return view('attendance.student_attendance');
    }

    public function layout_test()
    {
    	return view('attendance.student_attendance');
    }

}
