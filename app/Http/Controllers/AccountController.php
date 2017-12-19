<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function show()
    {
        $title = 'Account settings - Academy';
        $view = 'pages.account';
        $data = [
            'title' => $title,
            'active' => getActiveMenu()
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
