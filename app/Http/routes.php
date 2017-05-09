<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('customer.index');
});

Route::auth();

Route::get('/home', 'HomeController@index');


Route::resource('menu','MenuController');


// Route::get('/addadmin',function(){
// 	$user= new App\User();

// 	$user->name="dian";
// 	$user->email="dian@gmail.com";
// 	$user->password=bcrypt('123456');

// 	$user->save();

// 	return "berhasil tambah admin";
// });
