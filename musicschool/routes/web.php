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

    Route::post('/getClassroomList',[
        'uses'=> 'DataController@getClassroomList',
        'as' => 'getClassroomList',
        'middleware' => 'auth'
    ]);



    Route::get('/getLessonID',[
        'uses'=> 'DataController@getLessonID',
        'as' => 'getLessonID',
        'middleware' => 'auth'

    ]);

    Route::get('/getClassroomList',[
        'uses'=> 'DataController@getClassroomList',
        'as' => 'getClassroomList',
        'middleware' => 'auth'

    ]);



    Route::post('/check_in_teacher',[
        'uses'=> 'DataController@check_in_teacher',
        'as' => 'check_in_teacher',
        'middleware' => 'auth'

    ]);

    Route::post('/check_out_teacher',[
        'uses'=> 'DataController@check_out_teacher',
        'as' => 'check_out_teacher',
        'middleware' => 'auth'

    ]);

    Route::post('/getStudentAttendanceList_student',[
        'uses'=> 'DataController@getStudentAttendanceList_student',
        'as' => 'getStudentAttendanceList_student',
        'middleware' => 'auth'

    ]);


    Route::get('/add_teacher_attendance',[
        'uses'=> 'PagesController@add_teacher_attendance',
        'as' => 'add_teacher_attendance',
        'middleware' => 'auth'

    ]);

    Route::get('/student_dashboard_view_my_payments',[
        'uses'=> 'DataController@student_dashboard_view_my_payments',
        'as' => 'student_dashboard_view_my_payments',
        'middleware' => 'auth'

    ]);



    Route::get('/allocateClassrooms',[
        'uses'=> 'PagesController@allocateClassrooms',
        'as' => 'allocateClassrooms',
        'middleware' => 'auth'
    ]);

    Route::post('/storeStudent',[
        'uses'=> 'DataController@storeStudent',
        'as' => 'storeStudent',
        'middleware' => 'auth'

    ]);

    Route::post('/storeRoom',[
        'uses'=> 'DataController@storeRoom',
        'as' => 'storeRoom',


    ]);

    Route::post('/allocateClass',[
        'uses'=> 'DataController@allocateClass',
        'as' => 'allocateClass',


    ]);

    Route::post('/storeLesson',[
        'uses'=> 'DataController@storeLesson',
        'as' => 'storeLesson',
        'middleware' => 'auth'

    ]);



    Route::post('/updateReceipt',[
        'uses'=> 'DataController@updateReceipt',
        'as' => 'updateReceipt',
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


    Route::get('/update_student_payments',[
        'uses'=> 'PagesController@update_student_payments',
        'as' => 'update_student_payments',
        'middleware' => 'auth'
    ]);

    Route::get('/add_students',[
        'uses'=> 'PagesController@add_students',
        'as' => 'add_students',
        'middleware' => 'auth'
    ]);

    Route::get('/add_classroom',[
        'uses'=> 'PagesController@add_classroom',
        'as' => 'add_classroom',
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


    Route::post('/storeStudentAttendance',[
        'uses'=> 'DataController@storeStudentAttendance',
        'as' => 'storeStudentAttendance',
        'middleware' => 'auth'

    ]);


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

    Route::get('/view_student_attendance_teacher',[
        'uses'=> 'PagesController@view_student_attendance_teacher',
        'as' => 'view_student_attendance_teacher',
        'middleware' => 'auth'
    ]);



    Route::get('/view_teacher_attendance',[
        'uses'=> 'PagesController@view_teacher_attendance',
        'as' => 'view_teacher_attendance',
        'middleware' => 'auth'
    ]);

    Route::get('/monthly_payment',[
        'uses'=> 'DataController@monthly_payment',
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


    //Student Stuff
    Route::get('/student_dashboard',[
        'uses'=> 'PagesController@student_dashboard',
        'as' => 'student_dashboard',
        'middleware' => 'auth'
    ]);

    Route::get('/student_dashboard_view_my_attendance',[
        'uses'=> 'PagesController@student_dashboard_view_my_attendance',
        'as' => 'student_dashboard_view_my_attendance',
        'middleware' => 'auth'
    ]);


    //Shadini

    Route::post('/getStudentAttendanceList',[
        'uses'=> 'DataController@getStudentAttendanceList',
        'as' => 'getStudentAttendanceList',
        'middleware' => 'auth'

    ]);

    Route::get('/add_admin',[
        'uses'=> 'PagesController@add_admin',
        'as' => 'add_admin',
        'middleware' => 'auth'
    ]);

    Route::post('/storeAdmin',[
        'uses'=> 'DataController@storeAdmin',
        'as' => 'storeAdmin',
        'middleware' => 'auth'

    ]);

    Route::get('/add_instruments',[
        'uses'=> 'PagesController@add_instruments',
        'as' => 'add_instruments',
        'middleware' => 'auth'
    ]);

    Route::get('/getInstrumentList',[
        'uses'=> 'DataController@getInstrumentList',
        'as' => 'getInstrumentList',
        'middleware' => 'auth'

    ]);

    Route::get('/view_student_attendance',[
        'uses'=> 'PagesController@view_student_attendance',
        'as' => 'view_student_attendance',
        'middleware' => 'auth'
    ]);

    Route::get('/view_student_attendance_second',[
        'uses'=> 'PagesController@view_student_attendance_second',
        'as' => 'view_student_attendance_second',
        'middleware' => 'auth'
    ]);


    Route::get('/add_student_payments',[
        'uses'=> 'PagesController@add_student_payments',
        'as' => 'add_student_payments',
        'middleware' => 'auth'
    ]);

    Route::post('/storeInstrument',[
        'uses'=> 'DataController@storeInstrument',
        'as' => 'storeInstrument',
        'middleware' => 'auth'

    ]);

    Route::post('/storeStudentPayment',[
        'uses'=> 'DataController@storeStudentPayment',
        'as' => 'storeStudentPayment',
        'middleware' => 'auth'

    ]);

    Route::get('/admin_dashboard_update_teacher_payments',[
        'uses'=> 'PagesController@admin_dashboard_update_teacher_payments',
        'as' => 'admin_dashboard_update_teacher_payments',
        'middleware' => 'auth'

    ]);




    Route::post('/teacher_payment_update',[
        'uses'=> 'DataController@teacher_payment_update',
        'as' => 'teacher_payment_update',
        'middleware' => 'auth'

    ]);


    Route::post('/all_payment_update',[
        'uses'=> 'DataController@all_payment_update',
        'as' => 'all_payment_update',
        'middleware' => 'auth'

    ]);

    Route::post('/change_password',[
        'uses'=> 'DataController@change_password',
        'as' => 'change_password',
        'middleware' => 'auth'

    ]);

    Route::post('/getStudentAttendanceList_teacher',[
        'uses'=> 'DataController@getStudentAttendanceList_teacher',
        'as' => 'getStudentAttendanceList_teacher',
        'middleware' => 'auth'
    ]);

    //Himashi starts

    Route::post('/storeTeacher',[
        'uses'=> 'DataController@storeTeacher',
        'as' => 'storeTeacher',
        'middleware' => 'auth'

    ]);
//Himashi ends

    Route::get('/view_teacher_attendance_admin',[
        'uses'=> 'DataController@view_teacher_attendance_admin',
        'as' => 'view_teacher_attendance_admin',
        'middleware' => 'auth'
    ]);

	}




);



