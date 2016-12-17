<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    

    public function login()
    {
    	return view('Login.login');
    }

    public function layout_test()
    {
    	return view('MainLayout.mainlayout');
    }

	public function student_attendance()
    {
    	return view('attendance.mark_student_attendance');
    }
}
