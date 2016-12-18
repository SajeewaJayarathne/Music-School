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

    Route::get('/',[
        'uses'=> 'DataController@getStudentID',
        'as' => 'getStudentID'

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

	} 
);







Route::get('/attendance','PagesController@student_attendance');


