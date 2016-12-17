<?php

namespace App;

use Illuminate\Support\Facades\DB;

class DatabaseConnections
{
	public function storeUser()
	{
		$status = DB::insert('insert into login_details (id, password, remember_token) values (?, ?, ?)', 
			["AAA", bcrypt("AAA"), ""]
			);

		return $status;
	}

	public function getLessonCodes(){
	    $lessons = DB::select('select * from lesson where ');

    }
}