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
    	return view('attendance.mark_student_attendance');
    }

    public function admin_dashboard()
    {
        $data = " some data";
        return view('admin.admin_dashboard')->with('test', $data);
    }

    public function add_students()
    {
        return view('admin.admin_dashboard_add_students');
    }

    public function add_teachers()
    {
        return view('admin.admin_dashboard_add_teachers');
    }

    public function add_admin()
    {
        return view('admin.admin_dashboard_add_admin');
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
