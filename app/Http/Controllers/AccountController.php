<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
//        die(json_encode(auth()->user()));
        $title = 'Account settings - Academy';
        $view = 'pages.account';
        $data = [
            'title' => $title,
            'active' => getActiveMenu(),
            'user' => auth()->user()
        ];
        return view($view, $data);
    }

    public function myCourses()
    {
        $title = 'My courses - Academy';
        $view = 'pages.my-courses';
        $data = [
            'title' => $title,
            'active' => getActiveMenu('mycourses')
        ];
        return view($view, $data);
    }
}
