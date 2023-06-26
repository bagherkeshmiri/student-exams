<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('admin.pages.dashboard.index');
    }
}
