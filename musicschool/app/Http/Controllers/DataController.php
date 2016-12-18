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
}
