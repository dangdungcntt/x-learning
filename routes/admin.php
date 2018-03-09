<?php
/**
 * Created by PhpStorm.
 * User: dangd
 * Date: 1/21/2018
 * Time: 3:08 PM
 */


//admin area
//use Illuminate\Support\Facades\Route;

Route::domain('admin.' . config('app.url'))->group(function () {
    Route::get('login', 'Admin\Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Admin\Auth\LoginController@login');

    Route::get('/', 'Admin\AdminController@index')->name('admin.dashboard');
    Route::get('transactions', 'Admin\AdminController@transactions')->name('admin.transactions');

    Route::get('users/search', 'Admin\UserAdminController@search')->name('admin.users.search');
    Route::get('courses/types/search', 'Admin\CourseTypeAdminController@search')->name('admin.courses.types.search');
    Route::get('courses/search', 'Admin\CourseAdminController@search')->name('admin.courses.search');
    Route::get('courses/{id}/lessons', 'Admin\CourseAdminController@lessons')->name('admin.courses.lessons');
    
    Route::post('courses/{id}/updateImg', 'Admin\CourseAdminController@updateImg')->name('admin.courses.update_img');
    Route::post('courses/types/{id}/updateImg', 'Admin\CourseTypeAdminController@updateImg')->name('admin.courses.types.update_img');

    Route::resource('courses/types', 'Admin\CourseTypeAdminController', ['as' => 'admin.courses']);
    Route::resource('courses', 'Admin\CourseAdminController', ['as' => 'admin']);
    Route::resource('lessons', 'Admin\LessonAdminController', ['as' => 'admin']);
    Route::resource('coupons', 'Admin\CouponAdminController', ['as' => 'admin']);
    Route::resource('orders', 'Admin\OrderAdminController', ['as' => 'admin']);
    Route::resource('users', 'Admin\UserAdminController', ['as' => 'admin']);


});