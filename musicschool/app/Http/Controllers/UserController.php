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
	public function logout(Request $request)
	{	

		$db = new DatabaseConnections();
		$db -> storeUser();	
		return redirect()->route('loginerror');
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
					return redirect()->route('dashboard');
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
