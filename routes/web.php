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

use Illuminate\Support\Facades\Route;

//frontend

Route::get('/', 'Frontend\FrontendController@home');
Route::get('contact', 'Frontend\FrontendController@contact');

Route::get('account', 'Frontend\AccountController@index');
Route::get('account/courses', 'Frontend\AccountController@courses');

Route::get('instructors', 'Frontend\InstructorController@index');
Route::get('instructors/{id}/{slug?}', 'Frontend\InstructorController@show');

Route::get('courses', 'Frontend\CourseController@index');
Route::get('courses/{id}/{slug?}', 'Frontend\CourseController@show');
