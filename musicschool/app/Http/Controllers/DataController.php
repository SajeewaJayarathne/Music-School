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

    public function getLessonID(Request $request){
        $lesson_id =  $request->input('lesson_id');
        $lessonID = DB::select("SELECT leson_id FROM lesson where lesson_id like '?%'",[ $lesson_id]);
        return $lessonID;
    }
}
