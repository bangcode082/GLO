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

Route::get('/', 'HomeController@index');

Route::get('halaman/{jenis}','HomeController@menu');

Route::auth();

Route::get('/home', 'MenuController@index');


Route::resource('menu','MenuController');

Route::get('detil-menu/{id}','HomeController@show');


// Route::get('/addadmin',function(){
// 	$user= new App\User();

// 	$user->name="dian";
// 	$user->email="dian@gmail.com";
// 	$user->password=bcrypt('123456');

// 	$user->save();

// 	return "berhasil tambah admin";
// });
