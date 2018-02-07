<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        $title = 'Home - Academy';
        $view = 'frontend.pages.home';
        $data = [
            'title' => $title,
            'active' => getActiveMenu()
        ];
        return view($view, $data);
    }

    public function contact()
    {
        $title = 'Contact - Academy';
        $view = 'frontend.pages.contact';
        $data = [
            'title' => $title,
            'active' => getActiveMenu('contact')
        ];
        return view($view, $data);
    }

    public function teaching()
    {
        $title = 'Teaching - Academy';
        $view = 'test';
        $data = [
            'title' => $title,
            'active' => getActiveMenu('teaching')
        ];
        return view($view, $data);
    }


}
