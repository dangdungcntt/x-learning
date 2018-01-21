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



use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'PageController@home');
Route::get('/contact', 'PageController@contact');
Route::get('/account', 'AccountController@show');
Route::get('/my-courses', 'AccountController@myCourses');

Route::resource('instructors','InstructorController');
Route::resource('courses','CourseController');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'Admin\AdminController@index');

    Route::resource('courses','Admin\CourseAdminController', ['as' => 'admin']);
    Route::resource('coupons','Admin\CouponAdminController', ['as' => 'admin']);
    Route::resource('orders','Admin\OrderAdminController', ['as' => 'admin']);
    Route::resource('users','Admin\UserAdminController', ['as' => 'admin']);

});
