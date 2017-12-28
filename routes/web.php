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


// Route::get('/*', function() {
//     $title = 'Page not found';
//     $view = 'pages.404';
//     $data = [
//         'title' => $title,
//         'active' => getMenuActive()
//     ];
//     return view($view, $data);
// });


use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/', 'PageController@home');
Route::get('/contact', 'PageController@contact');

Route::get('/account', 'AccountController@show');
Route::get('/my-courses', 'AccountController@myCourses');

Route::resource('instructors','InstructorController');
Route::resource('courses','CourseController');

//Route::get('/home', 'HomeController@index')->name('home');
