<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $view = 'admin.pages.dashboard';
        $data = [
            'title' => 'Dashboard',
            'active' => getAdminActiveMenu('dashboard')
        ];
        return view($view, $data);
    }

    public function transactions() {
        $view = 'admin.pages.transactions';
        $data = [
            'title' => 'Transactions',
            'active' => getAdminActiveMenu('transactions')
        ];
        return view($view, $data);
    }
}
