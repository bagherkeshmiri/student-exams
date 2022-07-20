<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminDashboardController extends Controller
{
    public function index()
    {
//       dd( Auth::guard('admin')->user() );
        return view('admin.pages.dashboard.index');
    }
}
