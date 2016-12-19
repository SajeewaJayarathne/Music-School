<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DataController extends Controller
{
    public function getStudentID(Request $request){
        $id =  $request->input('index');
        $studentID = DB::select("SELECT id FROM student where id like '14%'",[ $id]);
        return $studentID;
    }

    public function getLessonID(\Symfony\Component\HttpFoundation\Request $request){
        $id =  $request->input('lesson_id');
        $lessonID = DB::select("SELECT lesson_id FROM lesson where lesson_id like '".$id."%'",[]);
        return $lessonID;
    }

    public function getStudentList(\Symfony\Component\HttpFoundation\Request $request){
        $id =  $request->input('lesson_id');
        $date = $request ->input('date');
        $students = DB::select("SELECT student_id FROM takes where lesson_id = '".$id."'",[]);
        return view('teacher.mark_attendance_second',['studentList' => array($id,$date,$students)]) ;
    }

    public function getStudentAttendanceList(\Symfony\Component\HttpFoundation\Request $request){
        $id =  $request->input('lesson_id');
        $date = $request ->input('date');
        $attendedStudents = DB::select("SELECT student_id FROM student_attendance WHERE lesson_id = '".$id."' AND attend_date = '".$date."'",[]);
        return view('teacher.student_attendance_second',['studentList' => array($id,$date,$attendedStudents)]) ;
    }

    public function getTeacherAttendanceList(\Symfony\Component\HttpFoundation\Request $request){
        $year =  $request->input('year');
        $month = $request ->input('month');
        $teacherAttendanceList = DB::select("SELECT attend_date,check_in,check_out FROM teacher_attendance WHERE YEAR(attend_date) = '".$year."' AND MONTH(attend_date) = '".$month."'",[]);
        return view('teacher.my_attendance_second',['AttendanceList' => array($teacherAttendanceList)]) ;
    }


    public function  storeStudent(Request $request){
        $status = DB::statement("call music_school.store_student(?, ?, ?, ?, 
        ?, ?, ?, ?, ?, ?, ?,?, ?, 
        ?, ?, ?, ?, ?, ?, ?, ?);",
            [
                $request['index'],
                $request['first_name'],
                $request['middle_initials'],
                $request['last_name'],
                $request['gendar'],

                $request['street_no'],
                $request['street_name'],
                $request['city'],
                $request['state'],
                $request['country'],
                $request['email'],

                $request['phne_home'],
                $request['phone_mobile'],
                $request['phone_emergency'],
                $request['nic'],
                $request['parent_first_name'],

                $request['parent_middle_initials'],
                $request['parent_last_name'],
                $request['parent_email'],
                $request['parent_relationship'],
                $request['parent_gendar']


            ]);

            return $status;

    }

    //function to store lesson in DB
    public function storeLesson(Request $request){
        $status = DB::statement("call music_school.store_lesson(?, ?, ?, ?);",
            [
                $request['lesson_id'],
                $request['lesson_name'],
                $request['lesson_type'],
                $request['credits']
            ]);

        return $status;
    }



}
