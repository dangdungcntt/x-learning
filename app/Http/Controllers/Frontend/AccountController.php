<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
//        die(json_encode(auth()->user()));
        $title = 'Account settings - Academy';
        $view = 'frontend.pages.account';
        $data = [
            'title' => $title,
            'active' => getActiveMenu(),
            'user' => auth()->user()
        ];
        return view($view, $data);
    }

    public function courses()
    {
        $title = 'My courses - Academy';
        $view = 'frontend.pages.mycourses';
        $data = [
            'title' => $title,
            'active' => getActiveMenu()
        ];
        return view($view, $data);
    }
}
