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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', 'HomeController@index');

Route::get('/about/{task}', function ($id) {
	$tasks=DB::table('user_tasks')->find($id);
    return view('tasks.show',compact('tasks'));
});