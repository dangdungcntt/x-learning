<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $title = 'Home - Academy';
        $view = 'pages.home';
        $data = [
            'title' => $title,
            'active' => getActiveMenu()
        ];
        return view($view, $data);
    }

    public function contact()
    {
        $title = 'Contact - Academy';
        $view = 'pages.contact';
        $data = [
            'title' => $title,
            'active' => getActiveMenu('contact')
        ];
        return view($view, $data);
    }


}
