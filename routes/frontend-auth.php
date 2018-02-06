<?php
/**
 * Created by PhpStorm.
 * User: dangd
 * Date: 1/21/2018
 * Time: 3:08 PM
 */


// Authentication Routes...
use Illuminate\Support\Facades\Route;

Route::get('login', 'Frontend\Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Frontend\Auth\LoginController@login');
Route::get('logout', 'Frontend\Auth\LoginController@logout')->name('logout');
Route::post('logout', 'Frontend\Auth\LoginController@logout');

// Registration Routes...
Route::get('register', 'Frontend\Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Frontend\Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Frontend\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Frontend\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');;
Route::get('password/reset/{token}', 'Frontend\Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Frontend\Auth\ResetPasswordController@reset');