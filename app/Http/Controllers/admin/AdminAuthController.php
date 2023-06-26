<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\auth\AdminLoginRequest;
use App\Models\Admin;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AdminAuthController extends Controller
{
    public function showLogin(): Application|View|Factory
    {
        return view('admin.auth.login');
    }

    public function login(AdminLoginRequest $request)
    {
        try {
            $admin = Admin::where('username', $request->input('username'))->first();
            if (is_null($admin)) {
                return redirect()->back()->with('error', __('errors.username_incorrect'));
            }
            if (!Hash::check($request->input('password'), $admin->password)) {
                return redirect()->back()->with('error', __('errors.password_incorrect'));
            }
            Auth::guard('admin')->loginUsingId($admin->id);
            return redirect()->route('admin.dashboard');
        } catch (Exception) {
            return redirect()->back()->with('error', __('errors.error_in_operation'));
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }

}
