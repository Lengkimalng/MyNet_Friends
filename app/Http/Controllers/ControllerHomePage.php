<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;



class ControllerHomePage extends Controller
{
    Function home(){
       	return view('home');
    }
    //throw this in your helper.php
	function set_active($path, $active = 'active') {

	    return call_user_func_array('Request::is', (array)$path) ? $active : '';

}
    Function about(){
       	return view('about');
    }
    Function contact(){
       	return view('contact');
    }
    public function show_teachers(){
      $teachers = DB::table('tbl_teachers')->get();
      return view('teachers',compact('teachers'));
    }
}
