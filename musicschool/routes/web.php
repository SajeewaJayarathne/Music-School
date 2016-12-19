<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/






Route::group(['middleware' =>['web']], function(){
	Route::get('/',[
		'uses' => 'PagesController@login',
		'as' => 'loginPage'
		]);

	Route::get('/login',[
		'uses' => 'PagesController@login',
		'as' => 'loginPage'
		]);

	Route::get('/loginerror',[
		'uses' => 'PagesController@loginerror',
		'as' => 'loginerror'
		]);
	//Route::post('/storeUser',[
	//		'uses'=> 'UserController@storeUser',
	//		'as' => 'storeUser'
	//	]);

	Route::get('/loginRedirect',[
			'uses'=> 'PagesController@login',
			'as' => 'loginRedirect'
		]);

    Route::get('/getStudentID',[
        'uses'=> 'DataController@getStudentID',
        'as' => 'getStudentID',
        'middleware' => 'auth'

    ]);

    Route::post('/getStudentList',[
        'uses'=> 'DataController@getStudentList',
        'as' => 'getStudentList',
        'middleware' => 'auth'

    ]);

    Route::post('/getStudentAttendanceList',[
        'uses'=> 'DataController@getStudentAttendanceList',
        'as' => 'getStudentAttendanceList',
        'middleware' => 'auth'
    ]);

    Route::post('/getTeacherAttendanceList',[
        'uses'=> 'DataController@getTeacherAttendanceList',
        'as' => 'getTeacherAttendanceList',
        'middleware' => 'auth'
    ]);



    Route::get('/getLessonID',[
        'uses'=> 'DataController@getLessonID',
        'as' => 'getLessonID',


    ]);

    Route::post('/storeStudent',[
        'uses'=> 'DataController@storeStudent',
        'as' => 'storeStudent',
        'middleware' => 'auth'

    ]);

    Route::post('/storeLesson',[
        'uses'=> 'DataController@storeLesson',
        'as' => 'storeLesson',
        'middleware' => 'auth'

    ]);

//    Route::get('/',[
//        'uses'=> 'PagesController@login',
//        'as' => 'loginRedirect'
//    ]);

    Route::post('/loginUser',[
        'uses'=> 'UserController@loginUser',
        'as' => 'loginUser'
    ]);
	Route::get('/logout',[
			'uses'=> 'UserController@logout',
			'as' => 'logout',
			'middleware' => 'auth'
		]);

    Route::get('/admin_dashboard',[
        'uses'=> 'PagesController@admin_dashboard',
        'as' => 'admin_dashboard',
        'middleware' => 'auth'
    ]);

    Route::get('/add_students',[
        'uses'=> 'PagesController@add_students',
        'as' => 'add_students',
        'middleware' => 'auth'
    ]);

    Route::get('/add_teachers',[
        'uses'=> 'PagesController@add_teachers',
        'as' => 'add_teachers',
        'middleware' => 'auth'
    ]);

    Route::get('/add_admin',[
        'uses'=> 'PagesController@add_admin',
        'as' => 'add_admin',
        'middleware' => 'auth'
    ]);

	Route::get('/dashboard',[
			'uses'=> 'PagesController@dashboard',
			'as' => 'dashboard',
			'middleware' => 'auth'
		]);


	//From Suji





    Route::get('/teacher_dashboard',[
        'uses'=> 'PagesController@teacher_dashboard',
        'as' => 'teacher_dashboard',
        'middleware' => 'auth'
    ]);

    Route::get('/add_lesson',[
        'uses'=> 'PagesController@add_lesson',
        'as' => 'add_lesson',
        'middleware' => 'auth'
    ]);

    Route::get('/update_lesson',[
        'uses'=> 'PagesController@update_lesson',
        'as' => 'update_lesson',
        'middleware' => 'auth'
    ]);

    Route::get('/mark_student_attendance',[
        'uses'=> 'PagesController@mark_student_attendance',
        'as' => 'mark_student_attendance',
        'middleware' => 'auth'
    ]);

    Route::get('/mark_student_attendance_second',[
        'uses'=> 'PagesController@mark_student_attendance_second',
        'as' => 'mark_student_attendance_second',
        'middleware' => 'auth'
    ]);

    Route::get('/view_student_attendance',[
        'uses'=> 'PagesController@view_student_attendance',
        'as' => 'view_student_attendance',
        'middleware' => 'auth'
    ]);

    Route::get('/view_teacher_attendance',[
        'uses'=> 'PagesController@view_teacher_attendance',
        'as' => 'view_teacher_attendance',
        'middleware' => 'auth'
    ]);

    Route::get('/monthly_payment',[
        'uses'=> 'PagesController@monthly_payment',
        'as' => 'monthly_payment',
        'middleware' => 'auth'
    ]);

    Route::get('/add_grades',[
        'uses'=> 'PagesController@add_grades',
        'as' => 'add_grades',
        'middleware' => 'auth'
    ]);

    Route::get('/view_grades',[
        'uses'=> 'PagesController@view_grades',
        'as' => 'view_grades',
        'middleware' => 'auth'
    ]);

    Route::post('/add_grades_second',[
        'uses'=> 'PagesController@add_grades_second',
        'as' => 'add_grades_second',
        'middleware' => 'auth'
    ]);


	}




);



