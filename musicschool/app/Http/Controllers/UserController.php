<?php

namespace App\Http\Controllers;

use App\DatabaseConnections;
use App\User;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use ValidatesRequests;

class UserController extends Controller
{
	public function logout()
	{	

		Auth::logout();
		return redirect()->route('loginRedirect');
	}

	public function loginUser(Request $request)
	{	
		$this->validate($request,[
			'id' => 'required',
			'password' => 'required|min:2'
			]);

		$user = new User();
		$user -> id = $request['id'];
		$user -> password = $request['password'];
		Auth::login($user);
		//$user-> storeUser('weqw','weqw','wqe','ewqe')

		$subquery = DB::select('select * from login_details where id = ?',[$request['id']]);

		if(Auth::check()){
			if($subquery != null){
				$resultpassword = null;
				foreach ($subquery as $row) {
					$resultpassword = $row->password;
				}
				if(Hash::check($request['password'],$resultpassword)){
                    $subqueryAdmin = DB::select('select * from admin where id = ?',[$request['id']]);
                    $subqueryStudent = DB::select('select * from student where id = ?',[$request['id']]);
                    $subqueryTeacher = DB::select('select * from teacher where id = ?',[$request['id']]);
                    if($subqueryAdmin != null and $subqueryStudent == null and $subqueryTeacher == null ){
                        return redirect()->route('admin_dashboard');
                    }else if($subqueryAdmin == null and $subqueryStudent != null and $subqueryTeacher == null  ){
                        return redirect()->route('student_dashboard');
                    }else if($subqueryAdmin == null and $subqueryStudent == null and $subqueryTeacher != null  ){
                        return redirect()->route('teacher_dashboard');
                    }else{
                        return redirect()->route('loginerror');
                    }

				}else{
					return redirect()->route('loginerror');
				}
			}else{
				return redirect()->route('loginerror');
			}			
		}else{

			return redirect()->route('loginerror');
		}

		
	}
    
}
