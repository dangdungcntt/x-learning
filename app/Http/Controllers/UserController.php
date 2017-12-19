<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function show()
    {
        $title = 'Login & Register - Academy';
        $view = 'pages.login';
        $data = [
            'title' => $title,
            'active' => getActiveMenu()
        ];
        return view($view, $data);
    }
}
