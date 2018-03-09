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

//frontend

Route::domain(config('app.url'))->group(function () {

	Route::get('/', 'Frontend\FrontendController@home')->name('home');
	Route::get('contact', 'Frontend\FrontendController@contact')->name('contact');
	Route::get('teaching', 'Frontend\FrontendController@teaching')->name('teaching');

	Route::get('account', 'Frontend\AccountController@index')->name('account');
	Route::get('account/courses', 'Frontend\AccountController@courses')->name('account.courses');

	Route::get('instructors', 'Frontend\InstructorController@index')->name('instructors');
	Route::get('instructors/{id}/{slug?}', 'Frontend\InstructorController@show')->name('instructors.show');

	Route::get('courses', 'Frontend\CourseController@index')->name('courses');
	Route::get('courses/{id}/{slug?}', 'Frontend\CourseController@show')->name('courses.show');

	Route::get('lessons/{id}', 'Frontend\LessonController@show')->name('lessons.show');
    Route::get('lessons/{id}/play', 'Frontend\LessonController@play')->name('lessons.play');
});
