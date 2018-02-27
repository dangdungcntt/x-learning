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
        $data = [
            'active' => getAdminActiveMenu('dashboard')
        ];

        return view('admin.pages.dashboard', $data);
    }

    public function transactions() {
        $data = [
            'active' => getAdminActiveMenu('transactions')
        ];

        return view('admin.pages.transactions', $data);
    }
}
