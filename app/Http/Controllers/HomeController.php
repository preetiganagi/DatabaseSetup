<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index()
    {
    	$todos = DB::table('user_tasks')->get();

    	return view('about',compact('todos'),['name' => 'preeti']);
    }
}
