<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class DataController extends Controller
{
    public function getStudentID(Request $request){
        $id =  $request->input('index');
        $studentID = DB::select("SELECT id FROM student where id like '14%'",[ $id]);
        return $studentID;
    }


    public function check_in_teacher(Request $request){
        $teacher_id = $request->input('teacher_id');
        DB::statement("call music_school.check_in_teacher(?);",[ $teacher_id]);
        return;
    }

    public function check_out_teacher(Request $request){
        $teacher_id = $request->input('teacher_id');
        DB::statement("call music_school.check_out_teacher(?);",[ $teacher_id]);
        return;
    }


    public function updateReceipt(Request $request){
        $receipt_id_new = $request->input('receipt_id');
        $amount_new = $request->input('amount');
        DB::statement("call music_school.update_receipt(?, ?);",[ $receipt_id_new, $amount_new]);
        return;
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



    public function getStudentAttendanceList_student(\Symfony\Component\HttpFoundation\Request $request){
        $lesson_id =  $request->input('lesson_id');
        $student_id = Auth::id();
        $attendedStudents = DB::select("SELECT lesson_id,attend_date FROM student_attendance WHERE lesson_id = ? AND student_id = ?",[$lesson_id,$student_id]);
        return view('student.student_dashboard_view_my_attendance_list',['attendedStudents' => $attendedStudents]) ;
    }



    public function student_dashboard_view_my_payments(\Symfony\Component\HttpFoundation\Request $request){
        $student_id = Auth::id();
        $studentPayments = DB::select("SELECT * FROM monthly_fee WHERE student_id = ?",[$student_id]);
        return view('student.student_dashboard_view_my_payments',['studentPayments' => $studentPayments]) ;
    }

    public function monthly_payment(\Symfony\Component\HttpFoundation\Request $request){
        $teacher_id = Auth::id();
        $teacherPayments = DB::select("SELECT * FROM monthly_payment WHERE teacher_id = ?",[$teacher_id]);
        return view('teacher.teacher_dashboard_view_my_payments',['teacherPayments' => $teacherPayments]) ;
    }

    public function change_password(\Symfony\Component\HttpFoundation\Request $request){
        $id = Auth::id();
        $password_crypt = bcrypt($request->input('password'));
            DB::update("update login_details set password = ? where id = ? ",[$password_crypt, $id]);
        return ;
    }

    public function all_payment_update(Request $request){
        $all_payment = $request->input('all_payment');
        DB::update("update monthly_payment set amount = amount + ? where MONTH(last_updated) = MONTH(CURDATE()) and 
        YEAR(last_updated) = YEAR(CURDATE());",[ $all_payment]);
        return;
    }

    public function teacher_payment_update(Request $request){
        $teacher_payment = $request->input('teacher_payment');
        $teacher_id = $request->input('teacher_id');
        DB::update("update monthly_payment set amount = amount + ? where teacher_id = ? and MONTH(last_updated) = MONTH(CURDATE()) and 
        YEAR(last_updated) = YEAR(CURDATE());",[ $teacher_id,$teacher_payment]);
        return;
    }

    public function getTeacherAttendanceList(\Symfony\Component\HttpFoundation\Request $request){
        $year =  $request->input('year');
        $month = $request ->input('month');
        $teacherAttendanceList = DB::select("SELECT check_in,check_out FROM teacher_attendance WHERE YEAR(check_in) = '".$year."' AND MONTH(check_in) = '".$month."'",[]);
        return view('teacher.my_attendance_second',['AttendanceList' => array($teacherAttendanceList)]) ;
    }

    public function getClassroomList(\Symfony\Component\HttpFoundation\Request $request){
        /*$room_number =  $request->input('room_number');
        $building = $request ->input('building');
        $capacity = $request ->input('capacity');
        $room_type = $request ->input('room_type');*/
        $classRoomList = DB::select("SELECT * FROM class_room");
        return view('admin.admin_dashboard_view_classrooms',['classRoomList' => array($classRoomList)]) ;
    }


    public function  storeStudent(Request $request){
        DB::statement("call music_school.store_student(?, ?, ?, ?, 
        ?, ?, ?, ?, ?, ?, ?,?, ?, 
        ?, ?, ?, ?, ?, ?, ?, ?, ?);",
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
                $request['parent_gendar'],
                bcrypt($request['index'])


            ]);

            return;

    }

    public function storeRoom(Request $request)
    {
        DB::statement("call music_school.store_classroom(?, ?, ?, ?);",
            [
                $request['room_number'],
               $request['building'],
               $request['capacity'],
               $request['room_type']
            ]);

        return;
    }

    //from sajeewa
    //function to store lesson in DB
    public function storeLesson(Request $request){
        DB::statement("call music_school.store_lesson(?, ?, ?, ?);",
            [
                $request['lesson_id'],
                $request['lesson_name'],
                $request['lesson_type'],
                $request['credits']
            ]);

        return;
    }

    //function to store student attendance in DB
    public function storeStudentAttendance(Request $request){
        $status = DB::statement("call music_school.store_student_attendance(?, ?, ?);",
            [
                $request['student_id'],
                $request['lesson_id'],
                $request['attend_date']
            ]);

        return $status;
    }

    public function allocateClass(Request $request){
        DB::statement("call music_school.allocate_classroom(?, ?, ?, ?, ?);",
            [
                $request['lesson_id'],
                $request['room_number'],
                $request['date'],
                $request['start_time'],
                $request['end_time']
            ]);

        return;
    }

    //Shadini
    public function  storeAdmin(Request $request){
        DB::statement("call music_school.store_admin(?, ?, ?, ?, 
        ?, ?, ?, ?, ?, ?, ?,?, ?, 
        ?, ?, ?);",
            [
                $request['user_id'],
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
                $request['phone_home'],
                $request['phone_mobile'],
                $request['phone_emergency'],
                $request['basic_salary'],
                bcrypt($request['user_id'])



            ]);

        return;

    }

    public function getInstrumentList(\Symfony\Component\HttpFoundation\Request $request){

        $instrumentList = DB::select("SELECT * FROM instrument");
        return view('admin.admin_dashboard_view_instruments',['instrumentList' => array($instrumentList)]) ;
    }

    public function  storeInstrument(Request $request){
        DB::statement("call music_school.store_instrument(?, ?, ?);",
            [
                $request['instrument_id'],
                $request['instrument_name'],
                $request['category']


            ]);

        return;

    }

    public function getStudentAttendanceList(\Symfony\Component\HttpFoundation\Request $request){
        $s_id =  $request->input('student_id');
        $l_id = $request ->input('lesson_id');
        $dateList = DB::select("SELECT attend_date FROM student_attendance where lesson_id =? and student_id =? " ,[$l_id,$s_id]);
        return view('admin.admin_dashboard_view_student_attendance_second',['studentAttendanceList' => $dateList]) ;
    }

    public function getStudentAttendanceList_copy(\Symfony\Component\HttpFoundation\Request $request){
        $id =  $request->input('lesson_id');
        $date = $request ->input('date');
        $attendedStudents = DB::select("SELECT student_id FROM student_attendance WHERE lesson_id = '".$id."' AND attend_date = '".$date."'",[]);
        return view('teacher.student_attendance_second',['studentList' => array($id,$date,$attendedStudents)]) ;
    }

    public function  storeStudentPayment(Request $request){

        DB::statement("call music_school.store_student_payment(?, ?);",
            [
                $request['student_id'],
                $request['amount']
            ]);

        /*return  DB::statement("call music_school.get_student_payment_id(?, ?);",
            [
                $request['student_id'],
                $request['amount']
            ]);*/

        return;


    }
    public function getStudentAttendanceList_teacher(\Symfony\Component\HttpFoundation\Request $request){
        $s_id =  $request->input('student_id');
        $l_id = $request ->input('lesson_id');
        $dateList = DB::select("SELECT attend_date FROM student_attendance where lesson_id =? and student_id =? " ,[$l_id,$s_id]);
        return view('teacher.teacher_dashboard_view_student_attendance_second',['studentAttendanceList' => $dateList]) ;
    }

    //Himashi
    public function  storeTeacher(Request $request){
        $status = DB::statement("call music_school.store_teacher(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?, ?, ?, ?);",
            [
                $request['id'],
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

                $request['phone_home'],
                $request['phone_mobile'],
                $request['phone_emergency'],

                $request['basic_salary'],
                bcrypt($request['user_id'])

            ]);

        return;

    }

    public function getTeacherID(Request $request){
        $id =  $request->input('id');
        $teacherID = DB::select("SELECT id FROM teacher WHERE id= '\".$id.\"'");
        return ($teacherID) ;
    }

    public function view_teacher_attendance_admin(\Symfony\Component\HttpFoundation\Request $request){

        $teacherAttendanceSummary = DB::select("SELECT * FROM teacher_attendance_summary");
        return view('admin.admin_dashboard_view_teacher_attendance',['teacherAttendanceSummary' => $teacherAttendanceSummary]) ;
    }

}
