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

    Route::get("users/search", 'Admin\UserAdminController@search')->name('admin.users.search');

    Route::resource('courses', 'Admin\CourseAdminController', ['as' => 'admin']);
    Route::resource('lessons', 'Admin\LessonController', ['as' => 'admin']);
    Route::resource('coupons', 'Admin\CouponAdminController', ['as' => 'admin']);
    Route::resource('orders', 'Admin\OrderAdminController', ['as' => 'admin']);
    Route::resource('users', 'Admin\UserAdminController', ['as' => 'admin']);


});