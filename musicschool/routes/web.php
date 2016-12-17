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

	Route::post('/loginUser',[
			'uses'=> 'UserController@loginUser',
			'as' => 'loginUser'
		]);
	Route::post('/logout',[
			'uses'=> 'UserController@logout',
			'as' => 'logout',
			'middleware' => 'auth'
		]);
	



	Route::get('/dashboard',[
			'uses'=> 'PagesController@dashboard',
			'as' => 'dashboard',
			'middleware' => 'auth'
		]);

	} 
);







