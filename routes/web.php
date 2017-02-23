<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('home', 'ControllerHomePage@home');
Route::get('about', 'ControllerHomePage@about');
Route::get('contact', 'ControllerHomePage@contact');
Route::get('teachers', 'ControllerHomePage@show_teachers');
