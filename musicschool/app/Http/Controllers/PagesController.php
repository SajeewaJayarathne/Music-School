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

    public function add_classroom()
    {
        return view('admin.admin_dashboard_add_classroom');
    }


    //from suji

    public function teacher_dashboard()
    {
        return view('teacher.teacher_dashboard');
    }
    public function add_lesson()
    {
        return view('teacher.add_lesson');
    }
    public function update_lesson()
    {
        return view('teacher.update_lesson');
    }
    public function mark_student_attendance()
    {
        return view('teacher.mark_attendance');
    }
    public function view_student_attendance()
    {
        return view('teacher.student_attendance');
    }
    public function view_teacher_attendance()
    {
        return view('teacher.my_attendance');
    }
    public function monthly_payment()
    {
        return view('teacher.monthly_payment');
    }
    public function add_grades()
    {
        return view('teacher.update_grade');
    }
    public function view_grades()
    {
        return view('teacher.view_grades');
    }
    public function add_grades_second(Request $request)
    {
        $var = $request->get('lesson_id');

        return view('teacher.update_grade_second')->with('studentArray', $var);
    }

    public function mark_student_attendance_second(Request $request)
    {
        $lesson_id = $request->get('lesson_id');
        $date = $request->get('date');
        return view('teacher.mark_attendance_second')->with('studentArray', $var);
    }



}
