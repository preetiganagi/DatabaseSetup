<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserTask;

class HomeController extends Controller
{
    public function index()
    {
    	$todos =UserTask::all();

    	return view('about',compact('todos'),['name' => 'preeti']);
    }

    function displayTask($id) 
    {
		$tasks=UserTask::find($id);
	    return view('tasks.show',compact('tasks'));
	}
}
